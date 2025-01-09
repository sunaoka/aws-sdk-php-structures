<?php

namespace Sunaoka\Aws\Structures\MedicalImaging\SearchImageSets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<SearchByAttributeValue> $values
 * @property 'EQUAL'|'BETWEEN' $operator
 */
class SearchFilter extends Shape
{
    /**
     * @param array{
     *     values: list<SearchByAttributeValue>,
     *     operator: 'EQUAL'|'BETWEEN'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
