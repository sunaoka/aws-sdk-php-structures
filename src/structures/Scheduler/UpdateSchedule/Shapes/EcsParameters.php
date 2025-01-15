<?php

namespace Sunaoka\Aws\Structures\Scheduler\UpdateSchedule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<CapacityProviderStrategyItem>|null $CapacityProviderStrategy
 * @property bool|null $EnableECSManagedTags
 * @property bool|null $EnableExecuteCommand
 * @property string|null $Group
 * @property 'EC2'|'FARGATE'|'EXTERNAL'|null $LaunchType
 * @property NetworkConfiguration|null $NetworkConfiguration
 * @property list<PlacementConstraint>|null $PlacementConstraints
 * @property list<PlacementStrategy>|null $PlacementStrategy
 * @property string|null $PlatformVersion
 * @property 'TASK_DEFINITION'|null $PropagateTags
 * @property string|null $ReferenceId
 * @property list<array<string, string>>|null $Tags
 * @property int<1, 10>|null $TaskCount
 * @property string $TaskDefinitionArn
 */
class EcsParameters extends Shape
{
    /**
     * @param array{
     *     CapacityProviderStrategy?: list<CapacityProviderStrategyItem>|null,
     *     EnableECSManagedTags?: bool|null,
     *     EnableExecuteCommand?: bool|null,
     *     Group?: string|null,
     *     LaunchType?: 'EC2'|'FARGATE'|'EXTERNAL'|null,
     *     NetworkConfiguration?: NetworkConfiguration|null,
     *     PlacementConstraints?: list<PlacementConstraint>|null,
     *     PlacementStrategy?: list<PlacementStrategy>|null,
     *     PlatformVersion?: string|null,
     *     PropagateTags?: 'TASK_DEFINITION'|null,
     *     ReferenceId?: string|null,
     *     Tags?: list<array<string, string>>|null,
     *     TaskCount?: int<1, 10>|null,
     *     TaskDefinitionArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
