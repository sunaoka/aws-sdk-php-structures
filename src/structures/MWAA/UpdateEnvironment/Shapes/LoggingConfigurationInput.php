<?php

namespace Sunaoka\Aws\Structures\MWAA\UpdateEnvironment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ModuleLoggingConfigurationInput|null $DagProcessingLogs
 * @property ModuleLoggingConfigurationInput|null $SchedulerLogs
 * @property ModuleLoggingConfigurationInput|null $WebserverLogs
 * @property ModuleLoggingConfigurationInput|null $WorkerLogs
 * @property ModuleLoggingConfigurationInput|null $TaskLogs
 */
class LoggingConfigurationInput extends Shape
{
    /**
     * @param array{
     *     DagProcessingLogs?: ModuleLoggingConfigurationInput|null,
     *     SchedulerLogs?: ModuleLoggingConfigurationInput|null,
     *     WebserverLogs?: ModuleLoggingConfigurationInput|null,
     *     WorkerLogs?: ModuleLoggingConfigurationInput|null,
     *     TaskLogs?: ModuleLoggingConfigurationInput|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
