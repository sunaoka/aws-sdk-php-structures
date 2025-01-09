<?php

namespace Sunaoka\Aws\Structures\MWAA\GetEnvironment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ModuleLoggingConfiguration $DagProcessingLogs
 * @property ModuleLoggingConfiguration $SchedulerLogs
 * @property ModuleLoggingConfiguration $WebserverLogs
 * @property ModuleLoggingConfiguration $WorkerLogs
 * @property ModuleLoggingConfiguration $TaskLogs
 */
class LoggingConfiguration extends Shape
{
    /**
     * @param array{
     *     DagProcessingLogs?: ModuleLoggingConfiguration,
     *     SchedulerLogs?: ModuleLoggingConfiguration,
     *     WebserverLogs?: ModuleLoggingConfiguration,
     *     WorkerLogs?: ModuleLoggingConfiguration,
     *     TaskLogs?: ModuleLoggingConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
