<?php

namespace Sunaoka\Aws\Structures\DLM\GetLifecyclePolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EBS_SNAPSHOT_MANAGEMENT'|'IMAGE_MANAGEMENT'|'EVENT_BASED_POLICY'|null $PolicyType
 * @property list<'VOLUME'|'INSTANCE'>|null $ResourceTypes
 * @property list<'CLOUD'|'OUTPOST'|'LOCAL_ZONE'>|null $ResourceLocations
 * @property list<Tag>|null $TargetTags
 * @property list<Schedule>|null $Schedules
 * @property Parameters|null $Parameters
 * @property EventSource|null $EventSource
 * @property list<Action>|null $Actions
 * @property 'SIMPLIFIED'|'STANDARD'|null $PolicyLanguage
 * @property 'VOLUME'|'INSTANCE'|null $ResourceType
 * @property int<1, max>|null $CreateInterval
 * @property int<1, max>|null $RetainInterval
 * @property bool|null $CopyTags
 * @property list<CrossRegionCopyTarget>|null $CrossRegionCopyTargets
 * @property bool|null $ExtendDeletion
 * @property Exclusions|null $Exclusions
 */
class PolicyDetails extends Shape
{
    /**
     * @param array{
     *     PolicyType?: 'EBS_SNAPSHOT_MANAGEMENT'|'IMAGE_MANAGEMENT'|'EVENT_BASED_POLICY'|null,
     *     ResourceTypes?: list<'VOLUME'|'INSTANCE'>|null,
     *     ResourceLocations?: list<'CLOUD'|'OUTPOST'|'LOCAL_ZONE'>|null,
     *     TargetTags?: list<Tag>|null,
     *     Schedules?: list<Schedule>|null,
     *     Parameters?: Parameters|null,
     *     EventSource?: EventSource|null,
     *     Actions?: list<Action>|null,
     *     PolicyLanguage?: 'SIMPLIFIED'|'STANDARD'|null,
     *     ResourceType?: 'VOLUME'|'INSTANCE'|null,
     *     CreateInterval?: int<1, max>|null,
     *     RetainInterval?: int<1, max>|null,
     *     CopyTags?: bool|null,
     *     CrossRegionCopyTargets?: list<CrossRegionCopyTarget>|null,
     *     ExtendDeletion?: bool|null,
     *     Exclusions?: Exclusions|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
