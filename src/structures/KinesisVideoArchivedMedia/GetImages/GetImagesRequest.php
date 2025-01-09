<?php

namespace Sunaoka\Aws\Structures\KinesisVideoArchivedMedia\GetImages;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StreamName
 * @property string $StreamARN
 * @property 'PRODUCER_TIMESTAMP'|'SERVER_TIMESTAMP' $ImageSelectorType
 * @property \Aws\Api\DateTimeResult $StartTimestamp
 * @property \Aws\Api\DateTimeResult $EndTimestamp
 * @property int $SamplingInterval
 * @property 'JPEG'|'PNG' $Format
 * @property array<'JPEGQuality', string> $FormatConfig
 * @property int $WidthPixels
 * @property int $HeightPixels
 * @property int $MaxResults
 * @property string $NextToken
 */
class GetImagesRequest extends Request
{
    /**
     * @param array{
     *     StreamName?: string,
     *     StreamARN?: string,
     *     ImageSelectorType: 'PRODUCER_TIMESTAMP'|'SERVER_TIMESTAMP',
     *     StartTimestamp: \Aws\Api\DateTimeResult,
     *     EndTimestamp: \Aws\Api\DateTimeResult,
     *     SamplingInterval?: int,
     *     Format: 'JPEG'|'PNG',
     *     FormatConfig?: array<'JPEGQuality', string>,
     *     WidthPixels?: int,
     *     HeightPixels?: int,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
