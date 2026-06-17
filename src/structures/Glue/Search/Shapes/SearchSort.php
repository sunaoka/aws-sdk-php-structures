<?php

namespace Sunaoka\Aws\Structures\Glue\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Attribute
 * @property 'ASCENDING'|'DESCENDING'|null $Order
 */
class SearchSort extends Shape
{
    /**
     * @param array{
     *     Attribute: string,
     *     Order?: 'ASCENDING'|'DESCENDING'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
