<?php

namespace Sunaoka\Aws\Structures\Ecs\RunTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\CapacityProviderStrategyItem> $capacityProviderStrategy
 * @property string $cluster
 * @property int $count
 * @property bool $enableECSManagedTags
 * @property bool $enableExecuteCommand
 * @property string $group
 * @property 'EC2'|'FARGATE'|'EXTERNAL' $launchType
 * @property Shapes\NetworkConfiguration $networkConfiguration
 * @property Shapes\TaskOverride $overrides
 * @property list<Shapes\PlacementConstraint> $placementConstraints
 * @property list<Shapes\PlacementStrategy> $placementStrategy
 * @property string $platformVersion
 * @property 'TASK_DEFINITION'|'SERVICE'|'NONE' $propagateTags
 * @property string $referenceId
 * @property string $startedBy
 * @property list<Shapes\Tag> $tags
 * @property string $taskDefinition
 * @property string $clientToken
 * @property list<Shapes\TaskVolumeConfiguration> $volumeConfigurations
 */
class RunTaskRequest extends Request
{
    /**
     * @param array{
     *     capacityProviderStrategy?: list<Shapes\CapacityProviderStrategyItem>,
     *     cluster?: string,
     *     count?: int,
     *     enableECSManagedTags?: bool,
     *     enableExecuteCommand?: bool,
     *     group?: string,
     *     launchType?: 'EC2'|'FARGATE'|'EXTERNAL',
     *     networkConfiguration?: Shapes\NetworkConfiguration,
     *     overrides?: Shapes\TaskOverride,
     *     placementConstraints?: list<Shapes\PlacementConstraint>,
     *     placementStrategy?: list<Shapes\PlacementStrategy>,
     *     platformVersion?: string,
     *     propagateTags?: 'TASK_DEFINITION'|'SERVICE'|'NONE',
     *     referenceId?: string,
     *     startedBy?: string,
     *     tags?: list<Shapes\Tag>,
     *     taskDefinition: string,
     *     clientToken?: string,
     *     volumeConfigurations?: list<Shapes\TaskVolumeConfiguration>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
