<?php

namespace Sunaoka\Aws\Structures\Glue\CreateJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property 'SCRIPT'|'VISUAL'|'NOTEBOOK'|null $JobMode
 * @property bool|null $JobRunQueuingEnabled
 * @property string|null $Description
 * @property string|null $LogUri
 * @property string $Role
 * @property Shapes\ExecutionProperty|null $ExecutionProperty
 * @property Shapes\JobCommand $Command
 * @property array<string, string>|null $DefaultArguments
 * @property array<string, string>|null $NonOverridableArguments
 * @property Shapes\ConnectionsList|null $Connections
 * @property int|null $MaxRetries
 * @property int|null $AllocatedCapacity
 * @property int<1, max>|null $Timeout
 * @property double|null $MaxCapacity
 * @property string|null $SecurityConfiguration
 * @property array<string, string>|null $Tags
 * @property Shapes\NotificationProperty|null $NotificationProperty
 * @property string|null $GlueVersion
 * @property int|null $NumberOfWorkers
 * @property 'Standard'|'G.1X'|'G.2X'|'G.025X'|'G.4X'|'G.8X'|'Z.2X'|null $WorkerType
 * @property array<string, Shapes\CodeGenConfigurationNode>|null $CodeGenConfigurationNodes
 * @property 'FLEX'|'STANDARD'|null $ExecutionClass
 * @property Shapes\SourceControlDetails|null $SourceControlDetails
 * @property string|null $MaintenanceWindow
 */
class CreateJobRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     JobMode?: 'SCRIPT'|'VISUAL'|'NOTEBOOK'|null,
     *     JobRunQueuingEnabled?: bool|null,
     *     Description?: string|null,
     *     LogUri?: string|null,
     *     Role: string,
     *     ExecutionProperty?: Shapes\ExecutionProperty|null,
     *     Command: Shapes\JobCommand,
     *     DefaultArguments?: array<string, string>|null,
     *     NonOverridableArguments?: array<string, string>|null,
     *     Connections?: Shapes\ConnectionsList|null,
     *     MaxRetries?: int|null,
     *     AllocatedCapacity?: int|null,
     *     Timeout?: int<1, max>|null,
     *     MaxCapacity?: double|null,
     *     SecurityConfiguration?: string|null,
     *     Tags?: array<string, string>|null,
     *     NotificationProperty?: Shapes\NotificationProperty|null,
     *     GlueVersion?: string|null,
     *     NumberOfWorkers?: int|null,
     *     WorkerType?: 'Standard'|'G.1X'|'G.2X'|'G.025X'|'G.4X'|'G.8X'|'Z.2X'|null,
     *     CodeGenConfigurationNodes?: array<string, Shapes\CodeGenConfigurationNode>|null,
     *     ExecutionClass?: 'FLEX'|'STANDARD'|null,
     *     SourceControlDetails?: Shapes\SourceControlDetails|null,
     *     MaintenanceWindow?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
