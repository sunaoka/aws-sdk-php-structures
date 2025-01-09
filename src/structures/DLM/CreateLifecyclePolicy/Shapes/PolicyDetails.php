<?php

namespace Sunaoka\Aws\Structures\DLM\CreateLifecyclePolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EBS_SNAPSHOT_MANAGEMENT'|'IMAGE_MANAGEMENT'|'EVENT_BASED_POLICY' $PolicyType
 * @property list<'VOLUME'|'INSTANCE'> $ResourceTypes
 * @property list<'CLOUD'|'OUTPOST'|'LOCAL_ZONE'> $ResourceLocations
 * @property list<Tag> $TargetTags
 * @property list<Schedule> $Schedules
 * @property Parameters $Parameters
 * @property EventSource $EventSource
 * @property list<Action> $Actions
 * @property 'SIMPLIFIED'|'STANDARD' $PolicyLanguage
 * @property 'VOLUME'|'INSTANCE' $ResourceType
 * @property int<1, max> $CreateInterval
 * @property int<1, max> $RetainInterval
 * @property bool $CopyTags
 * @property list<CrossRegionCopyTarget> $CrossRegionCopyTargets
 * @property bool $ExtendDeletion
 * @property Exclusions $Exclusions
 */
class PolicyDetails extends Shape
{
    /**
     * @param array{
     *     PolicyType?: 'EBS_SNAPSHOT_MANAGEMENT'|'IMAGE_MANAGEMENT'|'EVENT_BASED_POLICY',
     *     ResourceTypes?: list<'VOLUME'|'INSTANCE'>,
     *     ResourceLocations?: list<'CLOUD'|'OUTPOST'|'LOCAL_ZONE'>,
     *     TargetTags?: list<Tag>,
     *     Schedules?: list<Schedule>,
     *     Parameters?: Parameters,
     *     EventSource?: EventSource,
     *     Actions?: list<Action>,
     *     PolicyLanguage?: 'SIMPLIFIED'|'STANDARD',
     *     ResourceType?: 'VOLUME'|'INSTANCE',
     *     CreateInterval?: int<1, max>,
     *     RetainInterval?: int<1, max>,
     *     CopyTags?: bool,
     *     CrossRegionCopyTargets?: list<CrossRegionCopyTarget>,
     *     ExtendDeletion?: bool,
     *     Exclusions?: Exclusions
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
