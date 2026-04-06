<?php

namespace Sunaoka\Aws\Structures\MediaLive\ListReservations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ChannelClass
 * @property string|null $Codec
 * @property int<1, 1000>|null $MaxResults
 * @property string|null $MaximumBitrate
 * @property string|null $MaximumFramerate
 * @property string|null $NextToken
 * @property string|null $Resolution
 * @property string|null $ResourceType
 * @property string|null $SpecialFeature
 * @property string|null $VideoQuality
 */
class ListReservationsRequest extends Request
{
    /**
     * @param array{
     *     ChannelClass?: string|null,
     *     Codec?: string|null,
     *     MaxResults?: int<1, 1000>|null,
     *     MaximumBitrate?: string|null,
     *     MaximumFramerate?: string|null,
     *     NextToken?: string|null,
     *     Resolution?: string|null,
     *     ResourceType?: string|null,
     *     SpecialFeature?: string|null,
     *     VideoQuality?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
