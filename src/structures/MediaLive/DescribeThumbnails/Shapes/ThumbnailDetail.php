<?php

namespace Sunaoka\Aws\Structures\MediaLive\DescribeThumbnails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PipelineId
 * @property list<Thumbnail>|null $Thumbnails
 */
class ThumbnailDetail extends Shape
{
    /**
     * @param array{
     *     PipelineId?: string|null,
     *     Thumbnails?: list<Thumbnail>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
