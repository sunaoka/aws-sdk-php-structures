<?php

namespace Sunaoka\Aws\Structures\Acm\DescribeAcmeEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AcmeEndpointArn
 */
class DescribeAcmeEndpointRequest extends Request
{
    /**
     * @param array{AcmeEndpointArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
