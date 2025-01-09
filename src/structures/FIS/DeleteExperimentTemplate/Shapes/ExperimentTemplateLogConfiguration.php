<?php

namespace Sunaoka\Aws\Structures\FIS\DeleteExperimentTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ExperimentTemplateCloudWatchLogsLogConfiguration $cloudWatchLogsConfiguration
 * @property ExperimentTemplateS3LogConfiguration $s3Configuration
 * @property int $logSchemaVersion
 */
class ExperimentTemplateLogConfiguration extends Shape
{
    /**
     * @param array{
     *     cloudWatchLogsConfiguration?: ExperimentTemplateCloudWatchLogsLogConfiguration,
     *     s3Configuration?: ExperimentTemplateS3LogConfiguration,
     *     logSchemaVersion?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
