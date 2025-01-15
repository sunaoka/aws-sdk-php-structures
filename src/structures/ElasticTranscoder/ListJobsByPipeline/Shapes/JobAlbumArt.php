<?php

namespace Sunaoka\Aws\Structures\ElasticTranscoder\ListJobsByPipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $MergePolicy
 * @property list<Artwork>|null $Artwork
 */
class JobAlbumArt extends Shape
{
    /**
     * @param array{
     *     MergePolicy?: string|null,
     *     Artwork?: list<Artwork>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
