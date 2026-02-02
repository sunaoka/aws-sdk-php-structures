<?php

namespace Sunaoka\Aws\Structures\Connect\GetTestCaseExecutionSummary;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $TestCaseId
 * @property string $TestCaseExecutionId
 */
class GetTestCaseExecutionSummaryRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     TestCaseId: string,
     *     TestCaseExecutionId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
