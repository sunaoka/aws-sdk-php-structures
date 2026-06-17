<?php

namespace Sunaoka\Aws\Structures\Glue\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $StringValue
 */
class SearchMapFilterValue extends Shape
{
    /**
     * @param array{StringValue?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
