<?php

namespace Sunaoka\Aws\Structures\ElasticTranscoder\ListJobsByStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MergePolicy
 * @property list<Artwork> $Artwork
 */
class JobAlbumArt extends Shape
{
    /**
     * @param array{
     *     MergePolicy?: string,
     *     Artwork?: list<Artwork>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
