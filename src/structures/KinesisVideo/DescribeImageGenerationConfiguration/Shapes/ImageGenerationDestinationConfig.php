<?php

namespace Sunaoka\Aws\Structures\KinesisVideo\DescribeImageGenerationConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Uri
 * @property string $DestinationRegion
 */
class ImageGenerationDestinationConfig extends Shape
{
    /**
     * @param array{
     *     Uri: string,
     *     DestinationRegion: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
