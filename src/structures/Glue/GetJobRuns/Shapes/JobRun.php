<?php

namespace Sunaoka\Aws\Structures\Glue\GetJobRuns\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property int $Attempt
 * @property string $PreviousRunId
 * @property string $TriggerName
 * @property string $JobName
 * @property 'SCRIPT'|'VISUAL'|'NOTEBOOK' $JobMode
 * @property bool $JobRunQueuingEnabled
 * @property \Aws\Api\DateTimeResult $StartedOn
 * @property \Aws\Api\DateTimeResult $LastModifiedOn
 * @property \Aws\Api\DateTimeResult $CompletedOn
 * @property 'STARTING'|'RUNNING'|'STOPPING'|'STOPPED'|'SUCCEEDED'|'FAILED'|'TIMEOUT'|'ERROR'|'WAITING'|'EXPIRED' $JobRunState
 * @property array<string, string> $Arguments
 * @property string $ErrorMessage
 * @property list<Predecessor> $PredecessorRuns
 * @property int $AllocatedCapacity
 * @property int $ExecutionTime
 * @property int<1, max> $Timeout
 * @property double $MaxCapacity
 * @property 'Standard'|'G.1X'|'G.2X'|'G.025X'|'G.4X'|'G.8X'|'Z.2X' $WorkerType
 * @property int $NumberOfWorkers
 * @property string $SecurityConfiguration
 * @property string $LogGroupName
 * @property NotificationProperty $NotificationProperty
 * @property string $GlueVersion
 * @property double $DPUSeconds
 * @property 'FLEX'|'STANDARD' $ExecutionClass
 * @property string $MaintenanceWindow
 * @property string $ProfileName
 * @property string $StateDetail
 */
class JobRun extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     Attempt?: int,
     *     PreviousRunId?: string,
     *     TriggerName?: string,
     *     JobName?: string,
     *     JobMode?: 'SCRIPT'|'VISUAL'|'NOTEBOOK',
     *     JobRunQueuingEnabled?: bool,
     *     StartedOn?: \Aws\Api\DateTimeResult,
     *     LastModifiedOn?: \Aws\Api\DateTimeResult,
     *     CompletedOn?: \Aws\Api\DateTimeResult,
     *     JobRunState?: 'STARTING'|'RUNNING'|'STOPPING'|'STOPPED'|'SUCCEEDED'|'FAILED'|'TIMEOUT'|'ERROR'|'WAITING'|'EXPIRED',
     *     Arguments?: array<string, string>,
     *     ErrorMessage?: string,
     *     PredecessorRuns?: list<Predecessor>,
     *     AllocatedCapacity?: int,
     *     ExecutionTime?: int,
     *     Timeout?: int<1, max>,
     *     MaxCapacity?: double,
     *     WorkerType?: 'Standard'|'G.1X'|'G.2X'|'G.025X'|'G.4X'|'G.8X'|'Z.2X',
     *     NumberOfWorkers?: int,
     *     SecurityConfiguration?: string,
     *     LogGroupName?: string,
     *     NotificationProperty?: NotificationProperty,
     *     GlueVersion?: string,
     *     DPUSeconds?: double,
     *     ExecutionClass?: 'FLEX'|'STANDARD',
     *     MaintenanceWindow?: string,
     *     ProfileName?: string,
     *     StateDetail?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
