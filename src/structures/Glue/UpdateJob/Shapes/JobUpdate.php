<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SCRIPT'|'VISUAL'|'NOTEBOOK' $JobMode
 * @property bool $JobRunQueuingEnabled
 * @property string $Description
 * @property string $LogUri
 * @property string $Role
 * @property ExecutionProperty $ExecutionProperty
 * @property JobCommand $Command
 * @property array<string, string> $DefaultArguments
 * @property array<string, string> $NonOverridableArguments
 * @property ConnectionsList $Connections
 * @property int $MaxRetries
 * @property int $AllocatedCapacity
 * @property int<1, max> $Timeout
 * @property double $MaxCapacity
 * @property 'Standard'|'G.1X'|'G.2X'|'G.025X'|'G.4X'|'G.8X'|'Z.2X' $WorkerType
 * @property int $NumberOfWorkers
 * @property string $SecurityConfiguration
 * @property NotificationProperty $NotificationProperty
 * @property string $GlueVersion
 * @property array<string, CodeGenConfigurationNode> $CodeGenConfigurationNodes
 * @property 'FLEX'|'STANDARD' $ExecutionClass
 * @property SourceControlDetails $SourceControlDetails
 * @property string $MaintenanceWindow
 */
class JobUpdate extends Shape
{
    /**
     * @param array{
     *     JobMode?: 'SCRIPT'|'VISUAL'|'NOTEBOOK',
     *     JobRunQueuingEnabled?: bool,
     *     Description?: string,
     *     LogUri?: string,
     *     Role?: string,
     *     ExecutionProperty?: ExecutionProperty,
     *     Command?: JobCommand,
     *     DefaultArguments?: array<string, string>,
     *     NonOverridableArguments?: array<string, string>,
     *     Connections?: ConnectionsList,
     *     MaxRetries?: int,
     *     AllocatedCapacity?: int,
     *     Timeout?: int<1, max>,
     *     MaxCapacity?: double,
     *     WorkerType?: 'Standard'|'G.1X'|'G.2X'|'G.025X'|'G.4X'|'G.8X'|'Z.2X',
     *     NumberOfWorkers?: int,
     *     SecurityConfiguration?: string,
     *     NotificationProperty?: NotificationProperty,
     *     GlueVersion?: string,
     *     CodeGenConfigurationNodes?: array<string, CodeGenConfigurationNode>,
     *     ExecutionClass?: 'FLEX'|'STANDARD',
     *     SourceControlDetails?: SourceControlDetails,
     *     MaintenanceWindow?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
