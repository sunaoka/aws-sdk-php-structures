<?php

namespace Sunaoka\Aws\Structures\QApps\GetLibraryItem\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $title
 * @property string|null $color
 * @property int|null $appCount
 */
class Category extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     title: string,
     *     color?: string|null,
     *     appCount?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
