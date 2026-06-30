<?php

namespace Sunaoka\Aws\Structures\Acm\DescribeAcmeAccount;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AcmeEndpointArn
 * @property string $AccountUrl
 */
class DescribeAcmeAccountRequest extends Request
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
