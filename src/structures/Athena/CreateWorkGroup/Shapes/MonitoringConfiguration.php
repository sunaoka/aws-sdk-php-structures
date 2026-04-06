<?php

namespace Sunaoka\Aws\Structures\Athena\CreateWorkGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CloudWatchLoggingConfiguration|null $CloudWatchLoggingConfiguration
 * @property ManagedLoggingConfiguration|null $ManagedLoggingConfiguration
 * @property S3LoggingConfiguration|null $S3LoggingConfiguration
 */
class MonitoringConfiguration extends Shape
{
    /**
     * @param array{
     *     CloudWatchLoggingConfiguration?: CloudWatchLoggingConfiguration|null,
     *     ManagedLoggingConfiguration?: ManagedLoggingConfiguration|null,
     *     S3LoggingConfiguration?: S3LoggingConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
