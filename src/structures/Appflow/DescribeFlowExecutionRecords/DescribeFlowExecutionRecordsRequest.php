<?php

namespace Sunaoka\Aws\Structures\Appflow\DescribeFlowExecutionRecords;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $flowName
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class DescribeFlowExecutionRecordsRequest extends Request
{
    /**
     * @param array{
     *     flowName: string,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
