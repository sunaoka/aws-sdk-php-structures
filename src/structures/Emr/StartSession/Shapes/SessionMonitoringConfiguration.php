<?php

namespace Sunaoka\Aws\Structures\Emr\StartSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SessionCloudWatchLoggingConfiguration|null $CloudWatchLoggingConfiguration
 * @property SessionManagedLoggingConfiguration|null $ManagedLoggingConfiguration
 * @property SessionS3LoggingConfiguration|null $S3LoggingConfiguration
 */
class SessionMonitoringConfiguration extends Shape
{
    /**
     * @param array{
     *     CloudWatchLoggingConfiguration?: SessionCloudWatchLoggingConfiguration|null,
     *     ManagedLoggingConfiguration?: SessionManagedLoggingConfiguration|null,
     *     S3LoggingConfiguration?: SessionS3LoggingConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
