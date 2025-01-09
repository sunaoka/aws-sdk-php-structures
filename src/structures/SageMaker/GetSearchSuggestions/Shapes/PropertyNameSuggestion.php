<?php

namespace Sunaoka\Aws\Structures\SageMaker\GetSearchSuggestions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PropertyName
 */
class PropertyNameSuggestion extends Shape
{
    /**
     * @param array{PropertyName?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
