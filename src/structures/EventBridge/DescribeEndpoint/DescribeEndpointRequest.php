<?php

namespace Sunaoka\Aws\Structures\EventBridge\DescribeEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string|null $HomeRegion
 */
class DescribeEndpointRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     HomeRegion?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
