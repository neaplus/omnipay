<?php

/*
 * This file is part of the Omnipay package.
 *
 * (c) Adrian Macneil <adrian@adrianmacneil.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Omnipay\Migs\Message;

use Omnipay\Common\Message\AbstractResponse;
use Omnipay\Common\Message\RequestInterface;
use Omnipay\Common\Message\RedirectResponseInterface;

/**
 * Migs Purchase Response
 */
class ThreePartyPurchaseResponse extends AbstractResponse implements RedirectResponseInterface
{
    protected $redirectUrl;

    public function __construct(RequestInterface $request, $data, $redirectUrl)
    {
        parent::__construct($request, $data);
        $this->redirectUrl = $redirectUrl;
    }

    public function isSuccessful()
    {
        return false;
    }

    public function isRedirect()
    {
        return true;
    }

    public function getRedirectUrl()
    {
        return $this->redirectUrl;
    }

    public function getRedirectMethod()
    {
        return 'GET';
    }

    public function getRedirectData()
    {
        return $this->getData();
    }
}
