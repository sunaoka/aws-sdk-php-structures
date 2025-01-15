<?php

namespace Sunaoka\Aws\Structures\KinesisVideoArchivedMedia\GetDASHStreamingSessionURL;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $StreamName
 * @property string|null $StreamARN
 * @property 'LIVE'|'LIVE_REPLAY'|'ON_DEMAND'|null $PlaybackMode
 * @property 'ALWAYS'|'NEVER'|null $DisplayFragmentTimestamp
 * @property 'ALWAYS'|'NEVER'|null $DisplayFragmentNumber
 * @property Shapes\DASHFragmentSelector|null $DASHFragmentSelector
 * @property int<300, 43200>|null $Expires
 * @property int<1, 5000>|null $MaxManifestFragmentResults
 */
class GetDASHStreamingSessionURLRequest extends Request
{
    /**
     * @param array{
     *     StreamName?: string|null,
     *     StreamARN?: string|null,
     *     PlaybackMode?: 'LIVE'|'LIVE_REPLAY'|'ON_DEMAND'|null,
     *     DisplayFragmentTimestamp?: 'ALWAYS'|'NEVER'|null,
     *     DisplayFragmentNumber?: 'ALWAYS'|'NEVER'|null,
     *     DASHFragmentSelector?: Shapes\DASHFragmentSelector|null,
     *     Expires?: int<300, 43200>|null,
     *     MaxManifestFragmentResults?: int<1, 5000>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
