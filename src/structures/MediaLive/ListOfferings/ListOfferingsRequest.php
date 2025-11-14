<?php

namespace Sunaoka\Aws\Structures\MediaLive\ListOfferings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ChannelClass
 * @property string|null $ChannelConfiguration
 * @property string|null $Codec
 * @property string|null $Duration
 * @property int|null $MaxResults
 * @property string|null $MaximumBitrate
 * @property string|null $MaximumFramerate
 * @property string|null $NextToken
 * @property string|null $Resolution
 * @property string|null $ResourceType
 * @property string|null $SpecialFeature
 * @property string|null $VideoQuality
 */
class ListOfferingsRequest extends Request
{
    /**
     * @param array{
     *     ChannelClass?: string|null,
     *     ChannelConfiguration?: string|null,
     *     Codec?: string|null,
     *     Duration?: string|null,
     *     MaxResults?: int|null,
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
