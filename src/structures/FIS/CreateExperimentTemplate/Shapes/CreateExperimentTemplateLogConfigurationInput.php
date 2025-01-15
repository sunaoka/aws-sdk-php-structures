<?php

namespace Sunaoka\Aws\Structures\FIS\CreateExperimentTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ExperimentTemplateCloudWatchLogsLogConfigurationInput|null $cloudWatchLogsConfiguration
 * @property ExperimentTemplateS3LogConfigurationInput|null $s3Configuration
 * @property int $logSchemaVersion
 */
class CreateExperimentTemplateLogConfigurationInput extends Shape
{
    /**
     * @param array{
     *     cloudWatchLogsConfiguration?: ExperimentTemplateCloudWatchLogsLogConfigurationInput|null,
     *     s3Configuration?: ExperimentTemplateS3LogConfigurationInput|null,
     *     logSchemaVersion: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
