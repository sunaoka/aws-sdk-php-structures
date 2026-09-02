<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateChannelClass\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<OutputLocationRef>|null $AdditionalDestinationsAlternateDestinations
 * @property OutputLocationRef $AlternateDestination
 * @property AbWatermarkingCustomProfile|null $CustomProfile
 * @property string|null $License
 * @property int $OperatorId
 * @property int|null $PolyPeriod
 * @property 'CAMCORDING'|'CUSTOM'|'DEFAULT'|'HQ'|'MEZZANINE'|'ROBUST' $Profile
 * @property 'ID_2048'|'ID_512'|null $WatermarkIdLength
 */
class CmafIngestAbWatermarkerIrdetoSettings extends Shape
{
    /**
     * @param array{
     *     AdditionalDestinationsAlternateDestinations?: list<OutputLocationRef>|null,
     *     AlternateDestination: OutputLocationRef,
     *     CustomProfile?: AbWatermarkingCustomProfile|null,
     *     License?: string|null,
     *     OperatorId: int,
     *     PolyPeriod?: int|null,
     *     Profile: 'CAMCORDING'|'CUSTOM'|'DEFAULT'|'HQ'|'MEZZANINE'|'ROBUST',
     *     WatermarkIdLength?: 'ID_2048'|'ID_512'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
