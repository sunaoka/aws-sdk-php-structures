<?php

namespace Sunaoka\Aws\Structures\QApps\ListCategories\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $title
 * @property string $color
 * @property int $appCount
 */
class Category extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     title: string,
     *     color?: string,
     *     appCount?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
