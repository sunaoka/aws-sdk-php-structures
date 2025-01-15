<?php

namespace Sunaoka\Aws\Structures\KinesisVideo\UpdateImageGenerationConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED' $Status
 * @property 'SERVER_TIMESTAMP'|'PRODUCER_TIMESTAMP' $ImageSelectorType
 * @property ImageGenerationDestinationConfig $DestinationConfig
 * @property int $SamplingInterval
 * @property 'JPEG'|'PNG' $Format
 * @property array<'JPEGQuality', string>|null $FormatConfig
 * @property int<1, 3840>|null $WidthPixels
 * @property int<1, 2160>|null $HeightPixels
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
     *     FormatConfig?: array<'JPEGQuality', string>|null,
     *     WidthPixels?: int<1, 3840>|null,
     *     HeightPixels?: int<1, 2160>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
