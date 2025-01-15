<?php

namespace Sunaoka\Aws\Structures\MediaLive\ListReservations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'STANDARD'|'SINGLE_PIPELINE'|null $ChannelClass
 * @property 'MPEG2'|'AVC'|'HEVC'|'AUDIO'|'LINK'|'AV1'|null $Codec
 * @property 'MAX_10_MBPS'|'MAX_20_MBPS'|'MAX_50_MBPS'|null $MaximumBitrate
 * @property 'MAX_30_FPS'|'MAX_60_FPS'|null $MaximumFramerate
 * @property 'SD'|'HD'|'FHD'|'UHD'|null $Resolution
 * @property 'INPUT'|'OUTPUT'|'MULTIPLEX'|'CHANNEL'|null $ResourceType
 * @property 'ADVANCED_AUDIO'|'AUDIO_NORMALIZATION'|'MGHD'|'MGUHD'|null $SpecialFeature
 * @property 'STANDARD'|'ENHANCED'|'PREMIUM'|null $VideoQuality
 */
class ReservationResourceSpecification extends Shape
{
    /**
     * @param array{
     *     ChannelClass?: 'STANDARD'|'SINGLE_PIPELINE'|null,
     *     Codec?: 'MPEG2'|'AVC'|'HEVC'|'AUDIO'|'LINK'|'AV1'|null,
     *     MaximumBitrate?: 'MAX_10_MBPS'|'MAX_20_MBPS'|'MAX_50_MBPS'|null,
     *     MaximumFramerate?: 'MAX_30_FPS'|'MAX_60_FPS'|null,
     *     Resolution?: 'SD'|'HD'|'FHD'|'UHD'|null,
     *     ResourceType?: 'INPUT'|'OUTPUT'|'MULTIPLEX'|'CHANNEL'|null,
     *     SpecialFeature?: 'ADVANCED_AUDIO'|'AUDIO_NORMALIZATION'|'MGHD'|'MGUHD'|null,
     *     VideoQuality?: 'STANDARD'|'ENHANCED'|'PREMIUM'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
