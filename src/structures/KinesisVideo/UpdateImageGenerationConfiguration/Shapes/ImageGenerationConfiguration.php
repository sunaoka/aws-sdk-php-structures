<?php

namespace Sunaoka\Aws\Structures\KinesisVideo\UpdateImageGenerationConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED' $Status
 * @property 'SERVER_TIMESTAMP'|'PRODUCER_TIMESTAMP' $ImageSelectorType
 * @property ImageGenerationDestinationConfig $DestinationConfig
 * @property int $SamplingInterval
 * @property 'JPEG'|'PNG' $Format
 * @property array<'JPEGQuality', string> $FormatConfig
 * @property int<1, 3840> $WidthPixels
 * @property int<1, 2160> $HeightPixels
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
     *     WidthPixels?: int<1, 3840>,
     *     HeightPixels?: int<1, 2160>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
