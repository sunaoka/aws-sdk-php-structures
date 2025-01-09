<?php

namespace Sunaoka\Aws\Structures\MWAA\CreateEnvironment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ModuleLoggingConfigurationInput $DagProcessingLogs
 * @property ModuleLoggingConfigurationInput $SchedulerLogs
 * @property ModuleLoggingConfigurationInput $WebserverLogs
 * @property ModuleLoggingConfigurationInput $WorkerLogs
 * @property ModuleLoggingConfigurationInput $TaskLogs
 */
class LoggingConfigurationInput extends Shape
{
    /**
     * @param array{
     *     DagProcessingLogs?: ModuleLoggingConfigurationInput,
     *     SchedulerLogs?: ModuleLoggingConfigurationInput,
     *     WebserverLogs?: ModuleLoggingConfigurationInput,
     *     WorkerLogs?: ModuleLoggingConfigurationInput,
     *     TaskLogs?: ModuleLoggingConfigurationInput
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
