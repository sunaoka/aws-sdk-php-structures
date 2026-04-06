<?php

namespace Sunaoka\Aws\Structures\Ecs\RunTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\CapacityProviderStrategyItem>|null $capacityProviderStrategy
 * @property string|null $cluster
 * @property int|null $count
 * @property bool|null $enableECSManagedTags
 * @property bool|null $enableExecuteCommand
 * @property string|null $group
 * @property 'EC2'|'FARGATE'|'EXTERNAL'|null $launchType
 * @property Shapes\NetworkConfiguration|null $networkConfiguration
 * @property Shapes\TaskOverride|null $overrides
 * @property list<Shapes\PlacementConstraint>|null $placementConstraints
 * @property list<Shapes\PlacementStrategy>|null $placementStrategy
 * @property string|null $platformVersion
 * @property 'TASK_DEFINITION'|'SERVICE'|'NONE'|null $propagateTags
 * @property string|null $referenceId
 * @property string|null $startedBy
 * @property list<Shapes\Tag>|null $tags
 * @property string $taskDefinition
 * @property string|null $clientToken
 * @property list<Shapes\TaskVolumeConfiguration>|null $volumeConfigurations
 */
class RunTaskRequest extends Request
{
    /**
     * @param array{
     *     capacityProviderStrategy?: list<Shapes\CapacityProviderStrategyItem>|null,
     *     cluster?: string|null,
     *     count?: int|null,
     *     enableECSManagedTags?: bool|null,
     *     enableExecuteCommand?: bool|null,
     *     group?: string|null,
     *     launchType?: 'EC2'|'FARGATE'|'EXTERNAL'|null,
     *     networkConfiguration?: Shapes\NetworkConfiguration|null,
     *     overrides?: Shapes\TaskOverride|null,
     *     placementConstraints?: list<Shapes\PlacementConstraint>|null,
     *     placementStrategy?: list<Shapes\PlacementStrategy>|null,
     *     platformVersion?: string|null,
     *     propagateTags?: 'TASK_DEFINITION'|'SERVICE'|'NONE'|null,
     *     referenceId?: string|null,
     *     startedBy?: string|null,
     *     tags?: list<Shapes\Tag>|null,
     *     taskDefinition: string,
     *     clientToken?: string|null,
     *     volumeConfigurations?: list<Shapes\TaskVolumeConfiguration>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
