<?php

namespace Sunaoka\Aws\Structures\DataZone\SearchListings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $attribute
 * @property 'ASCENDING'|'DESCENDING' $order
 */
class SearchSort extends Shape
{
    /**
     * @param array{
     *     attribute: string,
     *     order?: 'ASCENDING'|'DESCENDING'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
