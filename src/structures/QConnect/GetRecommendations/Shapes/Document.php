<?php

namespace Sunaoka\Aws\Structures\QConnect\GetRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ContentReference $contentReference
 * @property DocumentText|null $title
 * @property DocumentText|null $excerpt
 */
class Document extends Shape
{
    /**
     * @param array{
     *     contentReference: ContentReference,
     *     title?: DocumentText|null,
     *     excerpt?: DocumentText|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
