<?php

namespace Sunaoka\Aws\Structures\FIS\CreateExperimentTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $arn
 * @property string $description
 * @property array<string, ExperimentTemplateTarget> $targets
 * @property array<string, ExperimentTemplateAction> $actions
 * @property list<ExperimentTemplateStopCondition> $stopConditions
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property \Aws\Api\DateTimeResult $lastUpdateTime
 * @property string $roleArn
 * @property array<string, string> $tags
 * @property ExperimentTemplateLogConfiguration $logConfiguration
 * @property ExperimentTemplateExperimentOptions $experimentOptions
 * @property int<0, max> $targetAccountConfigurationsCount
 * @property ExperimentTemplateReportConfiguration $experimentReportConfiguration
 */
class ExperimentTemplate extends Shape
{
    /**
     * @param array{
     *     id?: string,
     *     arn?: string,
     *     description?: string,
     *     targets?: array<string, ExperimentTemplateTarget>,
     *     actions?: array<string, ExperimentTemplateAction>,
     *     stopConditions?: list<ExperimentTemplateStopCondition>,
     *     creationTime?: \Aws\Api\DateTimeResult,
     *     lastUpdateTime?: \Aws\Api\DateTimeResult,
     *     roleArn?: string,
     *     tags?: array<string, string>,
     *     logConfiguration?: ExperimentTemplateLogConfiguration,
     *     experimentOptions?: ExperimentTemplateExperimentOptions,
     *     targetAccountConfigurationsCount?: int<0, max>,
     *     experimentReportConfiguration?: ExperimentTemplateReportConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
