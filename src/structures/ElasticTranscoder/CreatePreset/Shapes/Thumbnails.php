<?php

namespace Sunaoka\Aws\Structures\ElasticTranscoder\CreatePreset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Format
 * @property string|null $Interval
 * @property string|null $Resolution
 * @property string|null $AspectRatio
 * @property string|null $MaxWidth
 * @property string|null $MaxHeight
 * @property string|null $SizingPolicy
 * @property string|null $PaddingPolicy
 */
class Thumbnails extends Shape
{
    /**
     * @param array{
     *     Format?: string|null,
     *     Interval?: string|null,
     *     Resolution?: string|null,
     *     AspectRatio?: string|null,
     *     MaxWidth?: string|null,
     *     MaxHeight?: string|null,
     *     SizingPolicy?: string|null,
     *     PaddingPolicy?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
