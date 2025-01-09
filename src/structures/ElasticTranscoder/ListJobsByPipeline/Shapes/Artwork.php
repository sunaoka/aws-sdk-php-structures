<?php

namespace Sunaoka\Aws\Structures\ElasticTranscoder\ListJobsByPipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $InputKey
 * @property string $MaxWidth
 * @property string $MaxHeight
 * @property string $SizingPolicy
 * @property string $PaddingPolicy
 * @property string $AlbumArtFormat
 * @property Encryption $Encryption
 */
class Artwork extends Shape
{
    /**
     * @param array{
     *     InputKey?: string,
     *     MaxWidth?: string,
     *     MaxHeight?: string,
     *     SizingPolicy?: string,
     *     PaddingPolicy?: string,
     *     AlbumArtFormat?: string,
     *     Encryption?: Encryption
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
