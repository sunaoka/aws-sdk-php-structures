<?php

namespace Sunaoka\Aws\Structures\Connect\StartTestCaseExecution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $TestCaseId
 * @property string|null $ClientToken
 */
class StartTestCaseExecutionRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     TestCaseId: string,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
