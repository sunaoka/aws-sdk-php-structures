<?php

namespace Sunaoka\Aws\Structures\Glue\GetJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property 'SCRIPT'|'VISUAL'|'NOTEBOOK'|null $JobMode
 * @property bool|null $JobRunQueuingEnabled
 * @property string|null $Description
 * @property string|null $LogUri
 * @property string|null $Role
 * @property \Aws\Api\DateTimeResult|null $CreatedOn
 * @property \Aws\Api\DateTimeResult|null $LastModifiedOn
 * @property ExecutionProperty|null $ExecutionProperty
 * @property JobCommand|null $Command
 * @property array<string, string>|null $DefaultArguments
 * @property array<string, string>|null $NonOverridableArguments
 * @property ConnectionsList|null $Connections
 * @property int|null $MaxRetries
 * @property int|null $AllocatedCapacity
 * @property int<1, max>|null $Timeout
 * @property double|null $MaxCapacity
 * @property 'Standard'|'G.1X'|'G.2X'|'G.025X'|'G.4X'|'G.8X'|'Z.2X'|null $WorkerType
 * @property int|null $NumberOfWorkers
 * @property string|null $SecurityConfiguration
 * @property NotificationProperty|null $NotificationProperty
 * @property string|null $GlueVersion
 * @property array<string, CodeGenConfigurationNode>|null $CodeGenConfigurationNodes
 * @property 'FLEX'|'STANDARD'|null $ExecutionClass
 * @property SourceControlDetails|null $SourceControlDetails
 * @property string|null $MaintenanceWindow
 * @property string|null $ProfileName
 */
class Job extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     JobMode?: 'SCRIPT'|'VISUAL'|'NOTEBOOK'|null,
     *     JobRunQueuingEnabled?: bool|null,
     *     Description?: string|null,
     *     LogUri?: string|null,
     *     Role?: string|null,
     *     CreatedOn?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedOn?: \Aws\Api\DateTimeResult|null,
     *     ExecutionProperty?: ExecutionProperty|null,
     *     Command?: JobCommand|null,
     *     DefaultArguments?: array<string, string>|null,
     *     NonOverridableArguments?: array<string, string>|null,
     *     Connections?: ConnectionsList|null,
     *     MaxRetries?: int|null,
     *     AllocatedCapacity?: int|null,
     *     Timeout?: int<1, max>|null,
     *     MaxCapacity?: double|null,
     *     WorkerType?: 'Standard'|'G.1X'|'G.2X'|'G.025X'|'G.4X'|'G.8X'|'Z.2X'|null,
     *     NumberOfWorkers?: int|null,
     *     SecurityConfiguration?: string|null,
     *     NotificationProperty?: NotificationProperty|null,
     *     GlueVersion?: string|null,
     *     CodeGenConfigurationNodes?: array<string, CodeGenConfigurationNode>|null,
     *     ExecutionClass?: 'FLEX'|'STANDARD'|null,
     *     SourceControlDetails?: SourceControlDetails|null,
     *     MaintenanceWindow?: string|null,
     *     ProfileName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
