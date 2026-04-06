<?php

namespace Sunaoka\Aws\Structures\ElasticTranscoder\ReadJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $InputKey
 * @property string|null $MaxWidth
 * @property string|null $MaxHeight
 * @property string|null $SizingPolicy
 * @property string|null $PaddingPolicy
 * @property string|null $AlbumArtFormat
 * @property Encryption|null $Encryption
 */
class Artwork extends Shape
{
    /**
     * @param array{
     *     InputKey?: string|null,
     *     MaxWidth?: string|null,
     *     MaxHeight?: string|null,
     *     SizingPolicy?: string|null,
     *     PaddingPolicy?: string|null,
     *     AlbumArtFormat?: string|null,
     *     Encryption?: Encryption|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
