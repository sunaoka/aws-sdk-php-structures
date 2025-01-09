<?php

namespace Sunaoka\Aws\Structures\MediaLive\ListOfferings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelClass
 * @property string $ChannelConfiguration
 * @property string $Codec
 * @property string $Duration
 * @property int<1, 1000> $MaxResults
 * @property string $MaximumBitrate
 * @property string $MaximumFramerate
 * @property string $NextToken
 * @property string $Resolution
 * @property string $ResourceType
 * @property string $SpecialFeature
 * @property string $VideoQuality
 */
class ListOfferingsRequest extends Request
{
    /**
     * @param array{
     *     ChannelClass?: string,
     *     ChannelConfiguration?: string,
     *     Codec?: string,
     *     Duration?: string,
     *     MaxResults?: int<1, 1000>,
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
