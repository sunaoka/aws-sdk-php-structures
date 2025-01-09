<?php

namespace Sunaoka\Aws\Structures\EventBridge\DescribeEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $HomeRegion
 */
class DescribeEndpointRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     HomeRegion?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
