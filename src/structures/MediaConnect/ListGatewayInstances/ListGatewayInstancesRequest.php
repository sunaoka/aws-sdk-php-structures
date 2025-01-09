<?php

namespace Sunaoka\Aws\Structures\MediaConnect\ListGatewayInstances;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FilterArn
 * @property int $MaxResults
 * @property string $NextToken
 */
class ListGatewayInstancesRequest extends Request
{
    /**
     * @param array{
     *     FilterArn?: string,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
