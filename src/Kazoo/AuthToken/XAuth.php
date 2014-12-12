<?php

namespace Kazoo\AuthToken;

use \stdClass;

use \Kazoo\SDK;

/**
 *
 */
class XAuth implements AuthTokenInterface
{
    /**
     *
     * @var SDK
     */
    private $sdk;

    /**
     *
     * @var string
     */
    private $xauthToken;

    /**
     *
     * @var string
     */
    private $accountId;

    /**
     *
     * @param string $xauthToken
     * @param string $sipRealm
     */
    public function __construct($xauthToken, $accountId) {
        @session_start();
        $this->xauthToken = $xauthToken;
        $this->accountId = $accountId;
    }

    /**
     *
     * @return null|SDK
     */
    public function getSDK() {
        return $this->sdk;
    }

    /**
     *
     * @param SDK
     */
    public function setSDK(SDK $sdk) {
        $this->sdk = $sdk;
    }

    /**
     *
     * @return string
     */
    public function getAccountId() {
        return $this->accountId;
    }

    /**
     *
     * @return string
     */
    public function getToken() {
        return $this->xauthToken;
    }

    /**
     *
     *
     */
    public function reset() {
        $this->xauthToken = null;
        $this->accountId = null;
    }
}
