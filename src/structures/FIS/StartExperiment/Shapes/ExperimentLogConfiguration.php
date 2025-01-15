<?php

namespace Sunaoka\Aws\Structures\FIS\StartExperiment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ExperimentCloudWatchLogsLogConfiguration|null $cloudWatchLogsConfiguration
 * @property ExperimentS3LogConfiguration|null $s3Configuration
 * @property int|null $logSchemaVersion
 */
class ExperimentLogConfiguration extends Shape
{
    /**
     * @param array{
     *     cloudWatchLogsConfiguration?: ExperimentCloudWatchLogsLogConfiguration|null,
     *     s3Configuration?: ExperimentS3LogConfiguration|null,
     *     logSchemaVersion?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
