<?php

namespace Sunaoka\Aws\Structures\Connect\StopTestCaseExecution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $TestCaseExecutionId
 * @property string $TestCaseId
 * @property string|null $ClientToken
 */
class StopTestCaseExecutionRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     TestCaseExecutionId: string,
     *     TestCaseId: string,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
