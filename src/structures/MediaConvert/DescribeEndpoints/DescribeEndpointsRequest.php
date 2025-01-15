<?php

namespace Sunaoka\Aws\Structures\MediaConvert\DescribeEndpoints;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int|null $MaxResults
 * @property 'DEFAULT'|'GET_ONLY'|null $Mode
 * @property string|null $NextToken
 */
class DescribeEndpointsRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int|null,
     *     Mode?: 'DEFAULT'|'GET_ONLY'|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
