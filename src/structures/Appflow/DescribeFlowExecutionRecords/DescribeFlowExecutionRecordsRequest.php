<?php

namespace Sunaoka\Aws\Structures\Appflow\DescribeFlowExecutionRecords;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $flowName
 * @property int $maxResults
 * @property string $nextToken
 */
class DescribeFlowExecutionRecordsRequest extends Request
{
    /**
     * @param array{
     *     flowName: string,
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
