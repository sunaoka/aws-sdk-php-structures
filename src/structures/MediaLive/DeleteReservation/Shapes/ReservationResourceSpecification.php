<?php

namespace Sunaoka\Aws\Structures\MediaLive\DeleteReservation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'STANDARD'|'SINGLE_PIPELINE' $ChannelClass
 * @property 'MPEG2'|'AVC'|'HEVC'|'AUDIO'|'LINK'|'AV1' $Codec
 * @property 'MAX_10_MBPS'|'MAX_20_MBPS'|'MAX_50_MBPS' $MaximumBitrate
 * @property 'MAX_30_FPS'|'MAX_60_FPS' $MaximumFramerate
 * @property 'SD'|'HD'|'FHD'|'UHD' $Resolution
 * @property 'INPUT'|'OUTPUT'|'MULTIPLEX'|'CHANNEL' $ResourceType
 * @property 'ADVANCED_AUDIO'|'AUDIO_NORMALIZATION'|'MGHD'|'MGUHD' $SpecialFeature
 * @property 'STANDARD'|'ENHANCED'|'PREMIUM' $VideoQuality
 */
class ReservationResourceSpecification extends Shape
{
    /**
     * @param array{
     *     ChannelClass?: 'STANDARD'|'SINGLE_PIPELINE',
     *     Codec?: 'MPEG2'|'AVC'|'HEVC'|'AUDIO'|'LINK'|'AV1',
     *     MaximumBitrate?: 'MAX_10_MBPS'|'MAX_20_MBPS'|'MAX_50_MBPS',
     *     MaximumFramerate?: 'MAX_30_FPS'|'MAX_60_FPS',
     *     Resolution?: 'SD'|'HD'|'FHD'|'UHD',
     *     ResourceType?: 'INPUT'|'OUTPUT'|'MULTIPLEX'|'CHANNEL',
     *     SpecialFeature?: 'ADVANCED_AUDIO'|'AUDIO_NORMALIZATION'|'MGHD'|'MGUHD',
     *     VideoQuality?: 'STANDARD'|'ENHANCED'|'PREMIUM'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
