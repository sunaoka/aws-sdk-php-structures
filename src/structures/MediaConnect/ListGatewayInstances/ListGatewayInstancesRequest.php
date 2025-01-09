<?php

namespace Sunaoka\Aws\Structures\MediaConnect\ListGatewayInstances;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FilterArn
 * @property int<1, 1000> $MaxResults
 * @property string $NextToken
 */
class ListGatewayInstancesRequest extends Request
{
    /**
     * @param array{
     *     FilterArn?: string,
     *     MaxResults?: int<1, 1000>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
