<?php

namespace Sunaoka\Aws\Structures\SageMaker\GetSearchSuggestions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PropertyName
 */
class PropertyNameSuggestion extends Shape
{
    /**
     * @param array{PropertyName?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
