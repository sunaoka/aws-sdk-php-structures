<?php

namespace Sunaoka\Aws\Structures\DLM\GetLifecyclePolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EBS_SNAPSHOT_MANAGEMENT'|'IMAGE_MANAGEMENT'|'EVENT_BASED_POLICY'|null $PolicyType
 * @property list<'VOLUME'|'INSTANCE'>|null $ResourceTypes
 * @property list<'CLOUD'|'OUTPOST'>|null $ResourceLocations
 * @property list<Tag>|null $TargetTags
 * @property list<Schedule>|null $Schedules
 * @property Parameters|null $Parameters
 * @property EventSource|null $EventSource
 * @property list<Action>|null $Actions
 */
class PolicyDetails extends Shape
{
    /**
     * @param array{
     *     PolicyType?: 'EBS_SNAPSHOT_MANAGEMENT'|'IMAGE_MANAGEMENT'|'EVENT_BASED_POLICY'|null,
     *     ResourceTypes?: list<'VOLUME'|'INSTANCE'>|null,
     *     ResourceLocations?: list<'CLOUD'|'OUTPOST'>|null,
     *     TargetTags?: list<Tag>|null,
     *     Schedules?: list<Schedule>|null,
     *     Parameters?: Parameters|null,
     *     EventSource?: EventSource|null,
     *     Actions?: list<Action>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
