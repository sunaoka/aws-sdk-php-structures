<?php

namespace Sunaoka\Aws\Structures\KinesisVideo\DescribeImageGenerationConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED' $Status
 * @property 'SERVER_TIMESTAMP'|'PRODUCER_TIMESTAMP' $ImageSelectorType
 * @property ImageGenerationDestinationConfig $DestinationConfig
 * @property int $SamplingInterval
 * @property 'JPEG'|'PNG' $Format
 * @property array<'JPEGQuality', string> $FormatConfig
 * @property int $WidthPixels
 * @property int $HeightPixels
 */
class ImageGenerationConfiguration extends Shape
{
    /**
     * @param array{
     *     Status: 'ENABLED'|'DISABLED',
     *     ImageSelectorType: 'SERVER_TIMESTAMP'|'PRODUCER_TIMESTAMP',
     *     DestinationConfig: ImageGenerationDestinationConfig,
     *     SamplingInterval: int,
     *     Format: 'JPEG'|'PNG',
     *     FormatConfig?: array<'JPEGQuality', string>,
     *     WidthPixels?: int,
     *     HeightPixels?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
