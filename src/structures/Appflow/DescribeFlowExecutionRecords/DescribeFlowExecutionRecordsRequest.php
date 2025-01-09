<?php

namespace Sunaoka\Aws\Structures\Appflow\DescribeFlowExecutionRecords;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $flowName
 * @property int<1, 100> $maxResults
 * @property string $nextToken
 */
class DescribeFlowExecutionRecordsRequest extends Request
{
    /**
     * @param array{
     *     flowName: string,
     *     maxResults?: int<1, 100>,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
