<?php

namespace Sunaoka\Aws\Structures\KinesisVideoArchivedMedia\GetHLSStreamingSessionURL;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StreamName
 * @property string $StreamARN
 * @property 'LIVE'|'LIVE_REPLAY'|'ON_DEMAND' $PlaybackMode
 * @property Shapes\HLSFragmentSelector $HLSFragmentSelector
 * @property 'FRAGMENTED_MP4'|'MPEG_TS' $ContainerFormat
 * @property 'ALWAYS'|'NEVER'|'ON_DISCONTINUITY' $DiscontinuityMode
 * @property 'ALWAYS'|'NEVER' $DisplayFragmentTimestamp
 * @property int<300, 43200> $Expires
 * @property int<1, 5000> $MaxMediaPlaylistFragmentResults
 */
class GetHLSStreamingSessionURLRequest extends Request
{
    /**
     * @param array{
     *     StreamName?: string,
     *     StreamARN?: string,
     *     PlaybackMode?: 'LIVE'|'LIVE_REPLAY'|'ON_DEMAND',
     *     HLSFragmentSelector?: Shapes\HLSFragmentSelector,
     *     ContainerFormat?: 'FRAGMENTED_MP4'|'MPEG_TS',
     *     DiscontinuityMode?: 'ALWAYS'|'NEVER'|'ON_DISCONTINUITY',
     *     DisplayFragmentTimestamp?: 'ALWAYS'|'NEVER',
     *     Expires?: int<300, 43200>,
     *     MaxMediaPlaylistFragmentResults?: int<1, 5000>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
