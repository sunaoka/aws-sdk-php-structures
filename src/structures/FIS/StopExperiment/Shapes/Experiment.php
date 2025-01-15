<?php

namespace Sunaoka\Aws\Structures\FIS\StopExperiment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property string|null $arn
 * @property string|null $experimentTemplateId
 * @property string|null $roleArn
 * @property ExperimentState|null $state
 * @property array<string, ExperimentTarget>|null $targets
 * @property array<string, ExperimentAction>|null $actions
 * @property list<ExperimentStopCondition>|null $stopConditions
 * @property \Aws\Api\DateTimeResult|null $creationTime
 * @property \Aws\Api\DateTimeResult|null $startTime
 * @property \Aws\Api\DateTimeResult|null $endTime
 * @property array<string, string>|null $tags
 * @property ExperimentLogConfiguration|null $logConfiguration
 * @property ExperimentOptions|null $experimentOptions
 * @property int<0, max>|null $targetAccountConfigurationsCount
 * @property ExperimentReportConfiguration|null $experimentReportConfiguration
 * @property ExperimentReport|null $experimentReport
 */
class Experiment extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     arn?: string|null,
     *     experimentTemplateId?: string|null,
     *     roleArn?: string|null,
     *     state?: ExperimentState|null,
     *     targets?: array<string, ExperimentTarget>|null,
     *     actions?: array<string, ExperimentAction>|null,
     *     stopConditions?: list<ExperimentStopCondition>|null,
     *     creationTime?: \Aws\Api\DateTimeResult|null,
     *     startTime?: \Aws\Api\DateTimeResult|null,
     *     endTime?: \Aws\Api\DateTimeResult|null,
     *     tags?: array<string, string>|null,
     *     logConfiguration?: ExperimentLogConfiguration|null,
     *     experimentOptions?: ExperimentOptions|null,
     *     targetAccountConfigurationsCount?: int<0, max>|null,
     *     experimentReportConfiguration?: ExperimentReportConfiguration|null,
     *     experimentReport?: ExperimentReport|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
