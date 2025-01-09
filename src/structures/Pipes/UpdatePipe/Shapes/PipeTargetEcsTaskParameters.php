<?php

namespace Sunaoka\Aws\Structures\Pipes\UpdatePipe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TaskDefinitionArn
 * @property int<1, max> $TaskCount
 * @property 'EC2'|'FARGATE'|'EXTERNAL' $LaunchType
 * @property NetworkConfiguration $NetworkConfiguration
 * @property string $PlatformVersion
 * @property string $Group
 * @property list<CapacityProviderStrategyItem> $CapacityProviderStrategy
 * @property bool $EnableECSManagedTags
 * @property bool $EnableExecuteCommand
 * @property list<PlacementConstraint> $PlacementConstraints
 * @property list<PlacementStrategy> $PlacementStrategy
 * @property 'TASK_DEFINITION' $PropagateTags
 * @property string $ReferenceId
 * @property EcsTaskOverride $Overrides
 * @property list<Tag> $Tags
 */
class PipeTargetEcsTaskParameters extends Shape
{
    /**
     * @param array{
     *     TaskDefinitionArn: string,
     *     TaskCount?: int<1, max>,
     *     LaunchType?: 'EC2'|'FARGATE'|'EXTERNAL',
     *     NetworkConfiguration?: NetworkConfiguration,
     *     PlatformVersion?: string,
     *     Group?: string,
     *     CapacityProviderStrategy?: list<CapacityProviderStrategyItem>,
     *     EnableECSManagedTags?: bool,
     *     EnableExecuteCommand?: bool,
     *     PlacementConstraints?: list<PlacementConstraint>,
     *     PlacementStrategy?: list<PlacementStrategy>,
     *     PropagateTags?: 'TASK_DEFINITION',
     *     ReferenceId?: string,
     *     Overrides?: EcsTaskOverride,
     *     Tags?: list<Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
