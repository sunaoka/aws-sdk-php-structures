<?php

namespace Sunaoka\Aws\Structures\MediaLive\DescribeThumbnails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PipelineId
 * @property list<Thumbnail> $Thumbnails
 */
class ThumbnailDetail extends Shape
{
    /**
     * @param array{
     *     PipelineId?: string,
     *     Thumbnails?: list<Thumbnail>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
