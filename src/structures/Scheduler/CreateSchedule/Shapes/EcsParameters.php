<?php

namespace Sunaoka\Aws\Structures\Scheduler\CreateSchedule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<CapacityProviderStrategyItem> $CapacityProviderStrategy
 * @property bool $EnableECSManagedTags
 * @property bool $EnableExecuteCommand
 * @property string $Group
 * @property 'EC2'|'FARGATE'|'EXTERNAL' $LaunchType
 * @property NetworkConfiguration $NetworkConfiguration
 * @property list<PlacementConstraint> $PlacementConstraints
 * @property list<PlacementStrategy> $PlacementStrategy
 * @property string $PlatformVersion
 * @property 'TASK_DEFINITION' $PropagateTags
 * @property string $ReferenceId
 * @property list<array<string, string>> $Tags
 * @property int $TaskCount
 * @property string $TaskDefinitionArn
 */
class EcsParameters extends Shape
{
    /**
     * @param array{
     *     CapacityProviderStrategy?: list<CapacityProviderStrategyItem>,
     *     EnableECSManagedTags?: bool,
     *     EnableExecuteCommand?: bool,
     *     Group?: string,
     *     LaunchType?: 'EC2'|'FARGATE'|'EXTERNAL',
     *     NetworkConfiguration?: NetworkConfiguration,
     *     PlacementConstraints?: list<PlacementConstraint>,
     *     PlacementStrategy?: list<PlacementStrategy>,
     *     PlatformVersion?: string,
     *     PropagateTags?: 'TASK_DEFINITION',
     *     ReferenceId?: string,
     *     Tags?: list<array<string, string>>,
     *     TaskCount?: int,
     *     TaskDefinitionArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
