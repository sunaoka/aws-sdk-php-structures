<?php

namespace Sunaoka\Aws\Structures\MediaConnect\ListGatewayInstances;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $FilterArn
 * @property int<1, 1000>|null $MaxResults
 * @property string|null $NextToken
 */
class ListGatewayInstancesRequest extends Request
{
    /**
     * @param array{
     *     FilterArn?: string|null,
     *     MaxResults?: int<1, 1000>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
