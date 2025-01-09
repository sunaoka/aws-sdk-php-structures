<?php

namespace Sunaoka\Aws\Structures\MediaConvert\DescribeEndpoints;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $MaxResults
 * @property 'DEFAULT'|'GET_ONLY' $Mode
 * @property string $NextToken
 */
class DescribeEndpointsRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int,
     *     Mode?: 'DEFAULT'|'GET_ONLY',
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
