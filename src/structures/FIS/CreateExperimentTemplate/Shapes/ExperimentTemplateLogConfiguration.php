<?php

namespace Sunaoka\Aws\Structures\FIS\CreateExperimentTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ExperimentTemplateCloudWatchLogsLogConfiguration|null $cloudWatchLogsConfiguration
 * @property ExperimentTemplateS3LogConfiguration|null $s3Configuration
 * @property int|null $logSchemaVersion
 */
class ExperimentTemplateLogConfiguration extends Shape
{
    /**
     * @param array{
     *     cloudWatchLogsConfiguration?: ExperimentTemplateCloudWatchLogsLogConfiguration|null,
     *     s3Configuration?: ExperimentTemplateS3LogConfiguration|null,
     *     logSchemaVersion?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
