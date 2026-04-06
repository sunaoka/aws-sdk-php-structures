<?php

namespace Sunaoka\Aws\Structures\MWAA\GetEnvironment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ModuleLoggingConfiguration|null $DagProcessingLogs
 * @property ModuleLoggingConfiguration|null $SchedulerLogs
 * @property ModuleLoggingConfiguration|null $WebserverLogs
 * @property ModuleLoggingConfiguration|null $WorkerLogs
 * @property ModuleLoggingConfiguration|null $TaskLogs
 */
class LoggingConfiguration extends Shape
{
    /**
     * @param array{
     *     DagProcessingLogs?: ModuleLoggingConfiguration|null,
     *     SchedulerLogs?: ModuleLoggingConfiguration|null,
     *     WebserverLogs?: ModuleLoggingConfiguration|null,
     *     WorkerLogs?: ModuleLoggingConfiguration|null,
     *     TaskLogs?: ModuleLoggingConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
