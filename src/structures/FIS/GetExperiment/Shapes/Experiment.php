<?php

namespace Sunaoka\Aws\Structures\FIS\GetExperiment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $arn
 * @property string $experimentTemplateId
 * @property string $roleArn
 * @property ExperimentState $state
 * @property array<string, ExperimentTarget> $targets
 * @property array<string, ExperimentAction> $actions
 * @property list<ExperimentStopCondition> $stopConditions
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property \Aws\Api\DateTimeResult $startTime
 * @property \Aws\Api\DateTimeResult $endTime
 * @property array<string, string> $tags
 * @property ExperimentLogConfiguration $logConfiguration
 * @property ExperimentOptions $experimentOptions
 * @property int<0, max> $targetAccountConfigurationsCount
 * @property ExperimentReportConfiguration $experimentReportConfiguration
 * @property ExperimentReport $experimentReport
 */
class Experiment extends Shape
{
    /**
     * @param array{
     *     id?: string,
     *     arn?: string,
     *     experimentTemplateId?: string,
     *     roleArn?: string,
     *     state?: ExperimentState,
     *     targets?: array<string, ExperimentTarget>,
     *     actions?: array<string, ExperimentAction>,
     *     stopConditions?: list<ExperimentStopCondition>,
     *     creationTime?: \Aws\Api\DateTimeResult,
     *     startTime?: \Aws\Api\DateTimeResult,
     *     endTime?: \Aws\Api\DateTimeResult,
     *     tags?: array<string, string>,
     *     logConfiguration?: ExperimentLogConfiguration,
     *     experimentOptions?: ExperimentOptions,
     *     targetAccountConfigurationsCount?: int<0, max>,
     *     experimentReportConfiguration?: ExperimentReportConfiguration,
     *     experimentReport?: ExperimentReport
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
