<?php

namespace Sunaoka\Aws\Structures\DataZone\SearchTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $attribute
 * @property 'ASCENDING'|'DESCENDING'|null $order
 */
class SearchSort extends Shape
{
    /**
     * @param array{
     *     attribute: string,
     *     order?: 'ASCENDING'|'DESCENDING'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
