<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $endpointType
 */
class DescribeEndpointRequest extends Request
{
    /**
     * @param array{endpointType?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
