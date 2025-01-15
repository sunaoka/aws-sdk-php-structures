<?php

namespace Sunaoka\Aws\Structures\KinesisVideoArchivedMedia\GetImages;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $StreamName
 * @property string|null $StreamARN
 * @property 'PRODUCER_TIMESTAMP'|'SERVER_TIMESTAMP' $ImageSelectorType
 * @property \Aws\Api\DateTimeResult $StartTimestamp
 * @property \Aws\Api\DateTimeResult $EndTimestamp
 * @property int|null $SamplingInterval
 * @property 'JPEG'|'PNG' $Format
 * @property array<'JPEGQuality', string>|null $FormatConfig
 * @property int<1, 3840>|null $WidthPixels
 * @property int<1, 2160>|null $HeightPixels
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class GetImagesRequest extends Request
{
    /**
     * @param array{
     *     StreamName?: string|null,
     *     StreamARN?: string|null,
     *     ImageSelectorType: 'PRODUCER_TIMESTAMP'|'SERVER_TIMESTAMP',
     *     StartTimestamp: \Aws\Api\DateTimeResult,
     *     EndTimestamp: \Aws\Api\DateTimeResult,
     *     SamplingInterval?: int|null,
     *     Format: 'JPEG'|'PNG',
     *     FormatConfig?: array<'JPEGQuality', string>|null,
     *     WidthPixels?: int<1, 3840>|null,
     *     HeightPixels?: int<1, 2160>|null,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
