<?php

namespace Sunaoka\Aws\Structures\FIS\CreateExperimentTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ExperimentTemplateCloudWatchLogsLogConfigurationInput $cloudWatchLogsConfiguration
 * @property ExperimentTemplateS3LogConfigurationInput $s3Configuration
 * @property int $logSchemaVersion
 */
class CreateExperimentTemplateLogConfigurationInput extends Shape
{
    /**
     * @param array{
     *     cloudWatchLogsConfiguration?: ExperimentTemplateCloudWatchLogsLogConfigurationInput,
     *     s3Configuration?: ExperimentTemplateS3LogConfigurationInput,
     *     logSchemaVersion: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
