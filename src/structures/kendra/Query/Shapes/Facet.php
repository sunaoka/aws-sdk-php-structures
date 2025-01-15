<?php

namespace Sunaoka\Aws\Structures\kendra\Query\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DocumentAttributeKey
 * @property list<Facet>|null $Facets
 * @property int<0, 5000>|null $MaxResults
 */
class Facet extends Shape
{
    /**
     * @param array{
     *     DocumentAttributeKey?: string|null,
     *     Facets?: list<Facet>|null,
     *     MaxResults?: int<0, 5000>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
