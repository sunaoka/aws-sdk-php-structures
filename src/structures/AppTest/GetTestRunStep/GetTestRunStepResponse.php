<?php

namespace Sunaoka\Aws\Structures\AppTest\GetTestRunStep;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $stepName
 * @property string $testRunId
 * @property string $testCaseId
 * @property int $testCaseVersion
 * @property string $testSuiteId
 * @property int $testSuiteVersion
 * @property bool $beforeStep
 * @property bool $afterStep
 * @property 'Success'|'Failed'|'Running' $status
 * @property string $statusReason
 * @property \Aws\Api\DateTimeResult $runStartTime
 * @property \Aws\Api\DateTimeResult $runEndTime
 * @property Shapes\StepRunSummary $stepRunSummary
 */
class GetTestRunStepResponse extends Response
{
}
