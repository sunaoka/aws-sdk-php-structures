<?php

namespace Sunaoka\Aws\Structures\DataZone\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $attribute
 */
class SearchInItem extends Shape
{
    /**
     * @param array{attribute: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
