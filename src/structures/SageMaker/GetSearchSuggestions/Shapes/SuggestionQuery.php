<?php

namespace Sunaoka\Aws\Structures\SageMaker\GetSearchSuggestions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PropertyNameQuery $PropertyNameQuery
 */
class SuggestionQuery extends Shape
{
    /**
     * @param array{PropertyNameQuery?: PropertyNameQuery} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
