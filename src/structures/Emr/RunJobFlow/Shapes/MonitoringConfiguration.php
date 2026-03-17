<?php

namespace Sunaoka\Aws\Structures\Emr\RunJobFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CloudWatchLogConfiguration|null $CloudWatchLogConfiguration
 * @property S3LoggingConfiguration|null $S3LoggingConfiguration
 */
class MonitoringConfiguration extends Shape
{
    /**
     * @param array{
     *     CloudWatchLogConfiguration?: CloudWatchLogConfiguration|null,
     *     S3LoggingConfiguration?: S3LoggingConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
