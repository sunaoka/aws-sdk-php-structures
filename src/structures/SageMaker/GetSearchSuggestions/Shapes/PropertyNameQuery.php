<?php

namespace Sunaoka\Aws\Structures\SageMaker\GetSearchSuggestions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PropertyNameHint
 */
class PropertyNameQuery extends Shape
{
    /**
     * @param array{PropertyNameHint: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
