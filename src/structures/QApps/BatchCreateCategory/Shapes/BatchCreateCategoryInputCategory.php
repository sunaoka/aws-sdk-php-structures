<?php

namespace Sunaoka\Aws\Structures\QApps\BatchCreateCategory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property string $title
 * @property string|null $color
 */
class BatchCreateCategoryInputCategory extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     title: string,
     *     color?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
