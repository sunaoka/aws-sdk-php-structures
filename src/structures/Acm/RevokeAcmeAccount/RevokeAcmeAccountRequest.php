<?php

namespace Sunaoka\Aws\Structures\Acm\RevokeAcmeAccount;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AcmeEndpointArn
 * @property string $AccountUrl
 */
class RevokeAcmeAccountRequest extends Request
{
    /**
     * @param array{
     *     AcmeEndpointArn: string,
     *     AccountUrl: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
