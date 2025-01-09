<?php

namespace Sunaoka\Aws\Structures\MediaLive\ListReservations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelClass
 * @property string $Codec
 * @property int $MaxResults
 * @property string $MaximumBitrate
 * @property string $MaximumFramerate
 * @property string $NextToken
 * @property string $Resolution
 * @property string $ResourceType
 * @property string $SpecialFeature
 * @property string $VideoQuality
 */
class ListReservationsRequest extends Request
{
    /**
     * @param array{
     *     ChannelClass?: string,
     *     Codec?: string,
     *     MaxResults?: int,
     *     MaximumBitrate?: string,
     *     MaximumFramerate?: string,
     *     NextToken?: string,
     *     Resolution?: string,
     *     ResourceType?: string,
     *     SpecialFeature?: string,
     *     VideoQuality?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
