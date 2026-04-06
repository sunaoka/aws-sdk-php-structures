<?php

namespace Sunaoka\Aws\Structures\QApps\GetLibraryItem\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $title
 */
class Category extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     title: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
