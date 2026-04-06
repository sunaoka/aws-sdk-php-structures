<?php

namespace Sunaoka\Aws\Structures\Ecs\StartTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $cluster
 * @property list<string> $containerInstances
 * @property bool|null $enableECSManagedTags
 * @property bool|null $enableExecuteCommand
 * @property string|null $group
 * @property Shapes\NetworkConfiguration|null $networkConfiguration
 * @property Shapes\TaskOverride|null $overrides
 * @property 'TASK_DEFINITION'|'SERVICE'|'NONE'|null $propagateTags
 * @property string|null $referenceId
 * @property string|null $startedBy
 * @property list<Shapes\Tag>|null $tags
 * @property string $taskDefinition
 * @property list<Shapes\TaskVolumeConfiguration>|null $volumeConfigurations
 */
class StartTaskRequest extends Request
{
    /**
     * @param array{
     *     cluster?: string|null,
     *     containerInstances: list<string>,
     *     enableECSManagedTags?: bool|null,
     *     enableExecuteCommand?: bool|null,
     *     group?: string|null,
     *     networkConfiguration?: Shapes\NetworkConfiguration|null,
     *     overrides?: Shapes\TaskOverride|null,
     *     propagateTags?: 'TASK_DEFINITION'|'SERVICE'|'NONE'|null,
     *     referenceId?: string|null,
     *     startedBy?: string|null,
     *     tags?: list<Shapes\Tag>|null,
     *     taskDefinition: string,
     *     volumeConfigurations?: list<Shapes\TaskVolumeConfiguration>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
