<?php

namespace Sunaoka\Aws\Structures\MWAA\CreateEnvironment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ModuleLoggingConfigurationInput|null $DagProcessingLogs
 * @property ModuleLoggingConfigurationInput|null $SchedulerLogs
 * @property ModuleLoggingConfigurationInput|null $TaskLogs
 * @property ModuleLoggingConfigurationInput|null $WebserverLogs
 * @property ModuleLoggingConfigurationInput|null $WorkerLogs
 */
class LoggingConfigurationInput extends Shape
{
    /**
     * @param array{
     *     DagProcessingLogs?: ModuleLoggingConfigurationInput|null,
     *     SchedulerLogs?: ModuleLoggingConfigurationInput|null,
     *     TaskLogs?: ModuleLoggingConfigurationInput|null,
     *     WebserverLogs?: ModuleLoggingConfigurationInput|null,
     *     WorkerLogs?: ModuleLoggingConfigurationInput|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
