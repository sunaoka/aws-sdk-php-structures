<?php

namespace Sunaoka\Aws\Structures\EventBridge\ListTargetsByRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TaskDefinitionArn
 * @property int $TaskCount
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
 * @property list<Tag> $Tags
 */
class EcsParameters extends Shape
{
    /**
     * @param array{
     *     TaskDefinitionArn: string,
     *     TaskCount?: int,
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
     *     Tags?: list<Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
