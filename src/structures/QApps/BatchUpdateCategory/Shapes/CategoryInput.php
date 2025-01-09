<?php

namespace Sunaoka\Aws\Structures\QApps\BatchUpdateCategory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $title
 * @property string $color
 */
class CategoryInput extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     title: string,
     *     color?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
