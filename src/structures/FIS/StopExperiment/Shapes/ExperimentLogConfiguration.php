<?php

namespace Sunaoka\Aws\Structures\FIS\StopExperiment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ExperimentCloudWatchLogsLogConfiguration $cloudWatchLogsConfiguration
 * @property ExperimentS3LogConfiguration $s3Configuration
 * @property int $logSchemaVersion
 */
class ExperimentLogConfiguration extends Shape
{
    /**
     * @param array{
     *     cloudWatchLogsConfiguration?: ExperimentCloudWatchLogsLogConfiguration,
     *     s3Configuration?: ExperimentS3LogConfiguration,
     *     logSchemaVersion?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
