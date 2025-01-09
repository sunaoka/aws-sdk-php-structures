<?php

namespace Sunaoka\Aws\Structures\QConnect\QueryAssistant\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ContentReference $contentReference
 * @property DocumentText $excerpt
 * @property DocumentText $title
 */
class Document extends Shape
{
    /**
     * @param array{
     *     contentReference: ContentReference,
     *     excerpt?: DocumentText,
     *     title?: DocumentText
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
