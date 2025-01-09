<?php

namespace Sunaoka\Aws\Structures\Glue\CreateJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property 'SCRIPT'|'VISUAL'|'NOTEBOOK' $JobMode
 * @property bool $JobRunQueuingEnabled
 * @property string $Description
 * @property string $LogUri
 * @property string $Role
 * @property Shapes\ExecutionProperty $ExecutionProperty
 * @property Shapes\JobCommand $Command
 * @property array<string, string> $DefaultArguments
 * @property array<string, string> $NonOverridableArguments
 * @property Shapes\ConnectionsList $Connections
 * @property int $MaxRetries
 * @property int $AllocatedCapacity
 * @property int<1, max> $Timeout
 * @property double $MaxCapacity
 * @property string $SecurityConfiguration
 * @property array<string, string> $Tags
 * @property Shapes\NotificationProperty $NotificationProperty
 * @property string $GlueVersion
 * @property int $NumberOfWorkers
 * @property 'Standard'|'G.1X'|'G.2X'|'G.025X'|'G.4X'|'G.8X'|'Z.2X' $WorkerType
 * @property array<string, Shapes\CodeGenConfigurationNode> $CodeGenConfigurationNodes
 * @property 'FLEX'|'STANDARD' $ExecutionClass
 * @property Shapes\SourceControlDetails $SourceControlDetails
 * @property string $MaintenanceWindow
 */
class CreateJobRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     JobMode?: 'SCRIPT'|'VISUAL'|'NOTEBOOK',
     *     JobRunQueuingEnabled?: bool,
     *     Description?: string,
     *     LogUri?: string,
     *     Role: string,
     *     ExecutionProperty?: Shapes\ExecutionProperty,
     *     Command: Shapes\JobCommand,
     *     DefaultArguments?: array<string, string>,
     *     NonOverridableArguments?: array<string, string>,
     *     Connections?: Shapes\ConnectionsList,
     *     MaxRetries?: int,
     *     AllocatedCapacity?: int,
     *     Timeout?: int<1, max>,
     *     MaxCapacity?: double,
     *     SecurityConfiguration?: string,
     *     Tags?: array<string, string>,
     *     NotificationProperty?: Shapes\NotificationProperty,
     *     GlueVersion?: string,
     *     NumberOfWorkers?: int,
     *     WorkerType?: 'Standard'|'G.1X'|'G.2X'|'G.025X'|'G.4X'|'G.8X'|'Z.2X',
     *     CodeGenConfigurationNodes?: array<string, Shapes\CodeGenConfigurationNode>,
     *     ExecutionClass?: 'FLEX'|'STANDARD',
     *     SourceControlDetails?: Shapes\SourceControlDetails,
     *     MaintenanceWindow?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
