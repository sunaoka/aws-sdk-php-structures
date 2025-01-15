<?php

namespace Sunaoka\Aws\Structures\KinesisVideoArchivedMedia\GetHLSStreamingSessionURL;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $StreamName
 * @property string|null $StreamARN
 * @property 'LIVE'|'LIVE_REPLAY'|'ON_DEMAND'|null $PlaybackMode
 * @property Shapes\HLSFragmentSelector|null $HLSFragmentSelector
 * @property 'FRAGMENTED_MP4'|'MPEG_TS'|null $ContainerFormat
 * @property 'ALWAYS'|'NEVER'|'ON_DISCONTINUITY'|null $DiscontinuityMode
 * @property 'ALWAYS'|'NEVER'|null $DisplayFragmentTimestamp
 * @property int<300, 43200>|null $Expires
 * @property int<1, 5000>|null $MaxMediaPlaylistFragmentResults
 */
class GetHLSStreamingSessionURLRequest extends Request
{
    /**
     * @param array{
     *     StreamName?: string|null,
     *     StreamARN?: string|null,
     *     PlaybackMode?: 'LIVE'|'LIVE_REPLAY'|'ON_DEMAND'|null,
     *     HLSFragmentSelector?: Shapes\HLSFragmentSelector|null,
     *     ContainerFormat?: 'FRAGMENTED_MP4'|'MPEG_TS'|null,
     *     DiscontinuityMode?: 'ALWAYS'|'NEVER'|'ON_DISCONTINUITY'|null,
     *     DisplayFragmentTimestamp?: 'ALWAYS'|'NEVER'|null,
     *     Expires?: int<300, 43200>|null,
     *     MaxMediaPlaylistFragmentResults?: int<1, 5000>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
