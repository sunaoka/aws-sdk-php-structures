<?php

namespace Sunaoka\Aws\Structures\KinesisVideoArchivedMedia\GetDASHStreamingSessionURL;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StreamName
 * @property string $StreamARN
 * @property 'LIVE'|'LIVE_REPLAY'|'ON_DEMAND' $PlaybackMode
 * @property 'ALWAYS'|'NEVER' $DisplayFragmentTimestamp
 * @property 'ALWAYS'|'NEVER' $DisplayFragmentNumber
 * @property Shapes\DASHFragmentSelector $DASHFragmentSelector
 * @property int $Expires
 * @property int $MaxManifestFragmentResults
 */
class GetDASHStreamingSessionURLRequest extends Request
{
    /**
     * @param array{
     *     StreamName?: string,
     *     StreamARN?: string,
     *     PlaybackMode?: 'LIVE'|'LIVE_REPLAY'|'ON_DEMAND',
     *     DisplayFragmentTimestamp?: 'ALWAYS'|'NEVER',
     *     DisplayFragmentNumber?: 'ALWAYS'|'NEVER',
     *     DASHFragmentSelector?: Shapes\DASHFragmentSelector,
     *     Expires?: int,
     *     MaxManifestFragmentResults?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
