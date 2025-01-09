<?php

namespace Sunaoka\Aws\Structures\MedicalImaging\SearchImageSets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<SearchFilter> $filters
 * @property Sort $sort
 */
class SearchCriteria extends Shape
{
    /**
     * @param array{
     *     filters?: list<SearchFilter>,
     *     sort?: Sort
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
