<?php

namespace Sunaoka\Aws\Structures\AppTest\GetTestRunStep;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $testRunId
 * @property string $stepName
 * @property string $testCaseId
 * @property string $testSuiteId
 */
class GetTestRunStepRequest extends Request
{
    /**
     * @param array{
     *     testRunId: string,
     *     stepName: string,
     *     testCaseId?: string,
     *     testSuiteId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
