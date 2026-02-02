<?php

namespace Sunaoka\Aws\Structures\Connect\ListTestCaseExecutionRecords;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $TestCaseId
 * @property string $TestCaseExecutionId
 * @property 'INITIATED'|'PASSED'|'FAILED'|'IN_PROGRESS'|'STOPPED'|null $Status
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class ListTestCaseExecutionRecordsRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     TestCaseId: string,
     *     TestCaseExecutionId: string,
     *     Status?: 'INITIATED'|'PASSED'|'FAILED'|'IN_PROGRESS'|'STOPPED'|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
