<?php

namespace Sunaoka\Aws\Structures\MediaConvert\SearchJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NAES2_AND_NW'|'CBET'|'NAES2_AND_NW_AND_CBET' $ActiveWatermarkProcess
 * @property string $AdiFilename
 * @property string $AssetId
 * @property string $AssetName
 * @property string $CbetSourceId
 * @property string $EpisodeId
 * @property string $MetadataDestination
 * @property int<0, 65534> $SourceId
 * @property 'CLEAN'|'WATERMARKED' $SourceWatermarkStatus
 * @property string $TicServerUrl
 * @property 'RESERVE_UNIQUE_TICS_PER_TRACK'|'SAME_TICS_PER_TRACK' $UniqueTicPerAudioTrack
 */
class NielsenNonLinearWatermarkSettings extends Shape
{
    /**
     * @param array{
     *     ActiveWatermarkProcess?: 'NAES2_AND_NW'|'CBET'|'NAES2_AND_NW_AND_CBET',
     *     AdiFilename?: string,
     *     AssetId?: string,
     *     AssetName?: string,
     *     CbetSourceId?: string,
     *     EpisodeId?: string,
     *     MetadataDestination?: string,
     *     SourceId?: int<0, 65534>,
     *     SourceWatermarkStatus?: 'CLEAN'|'WATERMARKED',
     *     TicServerUrl?: string,
     *     UniqueTicPerAudioTrack?: 'RESERVE_UNIQUE_TICS_PER_TRACK'|'SAME_TICS_PER_TRACK'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
