<?php

namespace Sunaoka\Aws\Structures\MedicalImaging\SearchImageSets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<SearchFilter>|null $filters
 */
class SearchCriteria extends Shape
{
    /**
     * @param array{filters?: list<SearchFilter>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
