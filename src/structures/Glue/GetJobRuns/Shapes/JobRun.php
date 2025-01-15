<?php

namespace Sunaoka\Aws\Structures\Glue\GetJobRuns\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property int|null $Attempt
 * @property string|null $PreviousRunId
 * @property string|null $TriggerName
 * @property string|null $JobName
 * @property 'SCRIPT'|'VISUAL'|'NOTEBOOK'|null $JobMode
 * @property bool|null $JobRunQueuingEnabled
 * @property \Aws\Api\DateTimeResult|null $StartedOn
 * @property \Aws\Api\DateTimeResult|null $LastModifiedOn
 * @property \Aws\Api\DateTimeResult|null $CompletedOn
 * @property 'STARTING'|'RUNNING'|'STOPPING'|'STOPPED'|'SUCCEEDED'|'FAILED'|'TIMEOUT'|'ERROR'|'WAITING'|'EXPIRED'|null $JobRunState
 * @property array<string, string>|null $Arguments
 * @property string|null $ErrorMessage
 * @property list<Predecessor>|null $PredecessorRuns
 * @property int|null $AllocatedCapacity
 * @property int|null $ExecutionTime
 * @property int<1, max>|null $Timeout
 * @property double|null $MaxCapacity
 * @property 'Standard'|'G.1X'|'G.2X'|'G.025X'|'G.4X'|'G.8X'|'Z.2X'|null $WorkerType
 * @property int|null $NumberOfWorkers
 * @property string|null $SecurityConfiguration
 * @property string|null $LogGroupName
 * @property NotificationProperty|null $NotificationProperty
 * @property string|null $GlueVersion
 * @property double|null $DPUSeconds
 * @property 'FLEX'|'STANDARD'|null $ExecutionClass
 * @property string|null $MaintenanceWindow
 * @property string|null $ProfileName
 * @property string|null $StateDetail
 */
class JobRun extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     Attempt?: int|null,
     *     PreviousRunId?: string|null,
     *     TriggerName?: string|null,
     *     JobName?: string|null,
     *     JobMode?: 'SCRIPT'|'VISUAL'|'NOTEBOOK'|null,
     *     JobRunQueuingEnabled?: bool|null,
     *     StartedOn?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedOn?: \Aws\Api\DateTimeResult|null,
     *     CompletedOn?: \Aws\Api\DateTimeResult|null,
     *     JobRunState?: 'STARTING'|'RUNNING'|'STOPPING'|'STOPPED'|'SUCCEEDED'|'FAILED'|'TIMEOUT'|'ERROR'|'WAITING'|'EXPIRED'|null,
     *     Arguments?: array<string, string>|null,
     *     ErrorMessage?: string|null,
     *     PredecessorRuns?: list<Predecessor>|null,
     *     AllocatedCapacity?: int|null,
     *     ExecutionTime?: int|null,
     *     Timeout?: int<1, max>|null,
     *     MaxCapacity?: double|null,
     *     WorkerType?: 'Standard'|'G.1X'|'G.2X'|'G.025X'|'G.4X'|'G.8X'|'Z.2X'|null,
     *     NumberOfWorkers?: int|null,
     *     SecurityConfiguration?: string|null,
     *     LogGroupName?: string|null,
     *     NotificationProperty?: NotificationProperty|null,
     *     GlueVersion?: string|null,
     *     DPUSeconds?: double|null,
     *     ExecutionClass?: 'FLEX'|'STANDARD'|null,
     *     MaintenanceWindow?: string|null,
     *     ProfileName?: string|null,
     *     StateDetail?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
