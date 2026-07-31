<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\ListTestRuns\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $testRunId
 * @property 'INITIALIZING'|'RUNNING'|'STOPPING'|'PASSED'|'FAILED'|'STOPPED'|'ERROR' $status
 * @property \Aws\Api\DateTimeResult $startedAt
 * @property \Aws\Api\DateTimeResult|null $endedAt
 * @property string $testTemplateArn
 * @property string|null $serviceArn
 * @property string|null $errorMessage
 * @property 'SINGLE_ACCOUNT'|'MULTI_ACCOUNT'|null $accountTargeting
 */
class TestRunSummary extends Shape
{
    /**
     * @param array{
     *     testRunId: string,
     *     status: 'INITIALIZING'|'RUNNING'|'STOPPING'|'PASSED'|'FAILED'|'STOPPED'|'ERROR',
     *     startedAt: \Aws\Api\DateTimeResult,
     *     endedAt?: \Aws\Api\DateTimeResult|null,
     *     testTemplateArn: string,
     *     serviceArn?: string|null,
     *     errorMessage?: string|null,
     *     accountTargeting?: 'SINGLE_ACCOUNT'|'MULTI_ACCOUNT'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
