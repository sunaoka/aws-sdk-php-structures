<?php

namespace Sunaoka\Aws\Structures\Ecs\StartTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $cluster
 * @property list<string> $containerInstances
 * @property bool $enableECSManagedTags
 * @property bool $enableExecuteCommand
 * @property string $group
 * @property Shapes\NetworkConfiguration $networkConfiguration
 * @property Shapes\TaskOverride $overrides
 * @property 'TASK_DEFINITION'|'SERVICE'|'NONE' $propagateTags
 * @property string $referenceId
 * @property string $startedBy
 * @property list<Shapes\Tag> $tags
 * @property string $taskDefinition
 * @property list<Shapes\TaskVolumeConfiguration> $volumeConfigurations
 */
class StartTaskRequest extends Request
{
    /**
     * @param array{
     *     cluster?: string,
     *     containerInstances: list<string>,
     *     enableECSManagedTags?: bool,
     *     enableExecuteCommand?: bool,
     *     group?: string,
     *     networkConfiguration?: Shapes\NetworkConfiguration,
     *     overrides?: Shapes\TaskOverride,
     *     propagateTags?: 'TASK_DEFINITION'|'SERVICE'|'NONE',
     *     referenceId?: string,
     *     startedBy?: string,
     *     tags?: list<Shapes\Tag>,
     *     taskDefinition: string,
     *     volumeConfigurations?: list<Shapes\TaskVolumeConfiguration>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
