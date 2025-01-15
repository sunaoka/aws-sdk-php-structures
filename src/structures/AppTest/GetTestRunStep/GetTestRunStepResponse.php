<?php

namespace Sunaoka\Aws\Structures\AppTest\GetTestRunStep;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $stepName
 * @property string $testRunId
 * @property string|null $testCaseId
 * @property int|null $testCaseVersion
 * @property string|null $testSuiteId
 * @property int|null $testSuiteVersion
 * @property bool|null $beforeStep
 * @property bool|null $afterStep
 * @property 'Success'|'Failed'|'Running' $status
 * @property string|null $statusReason
 * @property \Aws\Api\DateTimeResult $runStartTime
 * @property \Aws\Api\DateTimeResult|null $runEndTime
 * @property Shapes\StepRunSummary|null $stepRunSummary
 */
class GetTestRunStepResponse extends Response
{
}
