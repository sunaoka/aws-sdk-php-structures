<?php

namespace Sunaoka\Aws\Structures\kendra\Query\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DocumentAttributeKey
 * @property list<Facet> $Facets
 * @property int<0, 5000> $MaxResults
 */
class Facet extends Shape
{
    /**
     * @param array{
     *     DocumentAttributeKey?: string,
     *     Facets?: list<Facet>,
     *     MaxResults?: int<0, 5000>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
