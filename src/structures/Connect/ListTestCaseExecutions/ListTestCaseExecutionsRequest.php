<?php

namespace Sunaoka\Aws\Structures\Connect\ListTestCaseExecutions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string|null $TestCaseId
 * @property string|null $TestCaseName
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 * @property 'INITIATED'|'PASSED'|'FAILED'|'IN_PROGRESS'|'STOPPED'|null $Status
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class ListTestCaseExecutionsRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     TestCaseId?: string|null,
     *     TestCaseName?: string|null,
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     EndTime?: \Aws\Api\DateTimeResult|null,
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
