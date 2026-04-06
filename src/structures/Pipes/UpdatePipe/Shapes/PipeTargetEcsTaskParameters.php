<?php

namespace Sunaoka\Aws\Structures\Pipes\UpdatePipe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TaskDefinitionArn
 * @property int<1, max>|null $TaskCount
 * @property 'EC2'|'FARGATE'|'EXTERNAL'|null $LaunchType
 * @property NetworkConfiguration|null $NetworkConfiguration
 * @property string|null $PlatformVersion
 * @property string|null $Group
 * @property list<CapacityProviderStrategyItem>|null $CapacityProviderStrategy
 * @property bool|null $EnableECSManagedTags
 * @property bool|null $EnableExecuteCommand
 * @property list<PlacementConstraint>|null $PlacementConstraints
 * @property list<PlacementStrategy>|null $PlacementStrategy
 * @property 'TASK_DEFINITION'|null $PropagateTags
 * @property string|null $ReferenceId
 * @property EcsTaskOverride|null $Overrides
 * @property list<Tag>|null $Tags
 */
class PipeTargetEcsTaskParameters extends Shape
{
    /**
     * @param array{
     *     TaskDefinitionArn: string,
     *     TaskCount?: int<1, max>|null,
     *     LaunchType?: 'EC2'|'FARGATE'|'EXTERNAL'|null,
     *     NetworkConfiguration?: NetworkConfiguration|null,
     *     PlatformVersion?: string|null,
     *     Group?: string|null,
     *     CapacityProviderStrategy?: list<CapacityProviderStrategyItem>|null,
     *     EnableECSManagedTags?: bool|null,
     *     EnableExecuteCommand?: bool|null,
     *     PlacementConstraints?: list<PlacementConstraint>|null,
     *     PlacementStrategy?: list<PlacementStrategy>|null,
     *     PropagateTags?: 'TASK_DEFINITION'|null,
     *     ReferenceId?: string|null,
     *     Overrides?: EcsTaskOverride|null,
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
