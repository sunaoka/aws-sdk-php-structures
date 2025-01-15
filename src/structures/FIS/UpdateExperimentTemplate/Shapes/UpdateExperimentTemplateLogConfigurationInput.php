<?php

namespace Sunaoka\Aws\Structures\FIS\UpdateExperimentTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ExperimentTemplateCloudWatchLogsLogConfigurationInput|null $cloudWatchLogsConfiguration
 * @property ExperimentTemplateS3LogConfigurationInput|null $s3Configuration
 * @property int|null $logSchemaVersion
 */
class UpdateExperimentTemplateLogConfigurationInput extends Shape
{
    /**
     * @param array{
     *     cloudWatchLogsConfiguration?: ExperimentTemplateCloudWatchLogsLogConfigurationInput|null,
     *     s3Configuration?: ExperimentTemplateS3LogConfigurationInput|null,
     *     logSchemaVersion?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
