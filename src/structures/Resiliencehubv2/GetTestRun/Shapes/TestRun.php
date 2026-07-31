<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\GetTestRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $testRunId
 * @property string $testId
 * @property 'INITIALIZING'|'RUNNING'|'STOPPING'|'PASSED'|'FAILED'|'STOPPED'|'ERROR' $status
 * @property string|null $serviceArn
 * @property \Aws\Api\DateTimeResult $startedAt
 * @property \Aws\Api\DateTimeResult|null $endedAt
 * @property list<ExperimentDetails>|null $experiments
 * @property int|null $eventCount
 * @property array<string, list<string>>|null $parameters
 * @property string|null $errorMessage
 * @property list<StopCondition>|null $stopConditions
 * @property LoggingConfiguration|null $loggingConfiguration
 * @property string|null $roleName
 * @property string $testTemplateArn
 * @property TestRunReportConfiguration|null $reportConfiguration
 * @property TestRunPolicySnapshot|null $policy
 * @property ReportGenerationResult|null $reportOutput
 * @property string|null $regionSwitchPlanArn
 * @property string|null $regionSwitchExecutionId
 * @property PermissionModel|null $permissionModel
 * @property list<string>|null $regions
 * @property 'SINGLE_ACCOUNT'|'MULTI_ACCOUNT'|null $accountTargeting
 */
class TestRun extends Shape
{
    /**
     * @param array{
     *     testRunId: string,
     *     testId: string,
     *     status: 'INITIALIZING'|'RUNNING'|'STOPPING'|'PASSED'|'FAILED'|'STOPPED'|'ERROR',
     *     serviceArn?: string|null,
     *     startedAt: \Aws\Api\DateTimeResult,
     *     endedAt?: \Aws\Api\DateTimeResult|null,
     *     experiments?: list<ExperimentDetails>|null,
     *     eventCount?: int|null,
     *     parameters?: array<string, list<string>>|null,
     *     errorMessage?: string|null,
     *     stopConditions?: list<StopCondition>|null,
     *     loggingConfiguration?: LoggingConfiguration|null,
     *     roleName?: string|null,
     *     testTemplateArn: string,
     *     reportConfiguration?: TestRunReportConfiguration|null,
     *     policy?: TestRunPolicySnapshot|null,
     *     reportOutput?: ReportGenerationResult|null,
     *     regionSwitchPlanArn?: string|null,
     *     regionSwitchExecutionId?: string|null,
     *     permissionModel?: PermissionModel|null,
     *     regions?: list<string>|null,
     *     accountTargeting?: 'SINGLE_ACCOUNT'|'MULTI_ACCOUNT'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
