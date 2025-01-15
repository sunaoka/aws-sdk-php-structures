<?php

namespace Sunaoka\Aws\Structures\MediaConvert\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NAES2_AND_NW'|'CBET'|'NAES2_AND_NW_AND_CBET'|null $ActiveWatermarkProcess
 * @property string|null $AdiFilename
 * @property string|null $AssetId
 * @property string|null $AssetName
 * @property string|null $CbetSourceId
 * @property string|null $EpisodeId
 * @property string|null $MetadataDestination
 * @property int<0, 65534>|null $SourceId
 * @property 'CLEAN'|'WATERMARKED'|null $SourceWatermarkStatus
 * @property string|null $TicServerUrl
 * @property 'RESERVE_UNIQUE_TICS_PER_TRACK'|'SAME_TICS_PER_TRACK'|null $UniqueTicPerAudioTrack
 */
class NielsenNonLinearWatermarkSettings extends Shape
{
    /**
     * @param array{
     *     ActiveWatermarkProcess?: 'NAES2_AND_NW'|'CBET'|'NAES2_AND_NW_AND_CBET'|null,
     *     AdiFilename?: string|null,
     *     AssetId?: string|null,
     *     AssetName?: string|null,
     *     CbetSourceId?: string|null,
     *     EpisodeId?: string|null,
     *     MetadataDestination?: string|null,
     *     SourceId?: int<0, 65534>|null,
     *     SourceWatermarkStatus?: 'CLEAN'|'WATERMARKED'|null,
     *     TicServerUrl?: string|null,
     *     UniqueTicPerAudioTrack?: 'RESERVE_UNIQUE_TICS_PER_TRACK'|'SAME_TICS_PER_TRACK'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
