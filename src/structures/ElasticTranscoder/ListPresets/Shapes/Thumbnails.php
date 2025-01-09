<?php

namespace Sunaoka\Aws\Structures\ElasticTranscoder\ListPresets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Format
 * @property string $Interval
 * @property string $Resolution
 * @property string $AspectRatio
 * @property string $MaxWidth
 * @property string $MaxHeight
 * @property string $SizingPolicy
 * @property string $PaddingPolicy
 */
class Thumbnails extends Shape
{
    /**
     * @param array{
     *     Format?: string,
     *     Interval?: string,
     *     Resolution?: string,
     *     AspectRatio?: string,
     *     MaxWidth?: string,
     *     MaxHeight?: string,
     *     SizingPolicy?: string,
     *     PaddingPolicy?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
