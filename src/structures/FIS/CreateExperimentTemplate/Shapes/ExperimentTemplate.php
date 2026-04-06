<?php

namespace Sunaoka\Aws\Structures\FIS\CreateExperimentTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property string|null $arn
 * @property string|null $description
 * @property array<string, ExperimentTemplateTarget>|null $targets
 * @property array<string, ExperimentTemplateAction>|null $actions
 * @property list<ExperimentTemplateStopCondition>|null $stopConditions
 * @property \Aws\Api\DateTimeResult|null $creationTime
 * @property \Aws\Api\DateTimeResult|null $lastUpdateTime
 * @property string|null $roleArn
 * @property array<string, string>|null $tags
 * @property ExperimentTemplateLogConfiguration|null $logConfiguration
 * @property ExperimentTemplateExperimentOptions|null $experimentOptions
 * @property int<0, max>|null $targetAccountConfigurationsCount
 * @property ExperimentTemplateReportConfiguration|null $experimentReportConfiguration
 */
class ExperimentTemplate extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     arn?: string|null,
     *     description?: string|null,
     *     targets?: array<string, ExperimentTemplateTarget>|null,
     *     actions?: array<string, ExperimentTemplateAction>|null,
     *     stopConditions?: list<ExperimentTemplateStopCondition>|null,
     *     creationTime?: \Aws\Api\DateTimeResult|null,
     *     lastUpdateTime?: \Aws\Api\DateTimeResult|null,
     *     roleArn?: string|null,
     *     tags?: array<string, string>|null,
     *     logConfiguration?: ExperimentTemplateLogConfiguration|null,
     *     experimentOptions?: ExperimentTemplateExperimentOptions|null,
     *     targetAccountConfigurationsCount?: int<0, max>|null,
     *     experimentReportConfiguration?: ExperimentTemplateReportConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
