<?php

namespace Sunaoka\Aws\Structures\QApps\BatchUpdateCategory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $title
 * @property string|null $color
 */
class CategoryInput extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     title: string,
     *     color?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
