<?php

namespace Sunaoka\Aws\Structures\SageMaker\GetSearchSuggestions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PropertyNameQuery|null $PropertyNameQuery
 */
class SuggestionQuery extends Shape
{
    /**
     * @param array{PropertyNameQuery?: PropertyNameQuery|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
