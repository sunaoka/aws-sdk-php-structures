<?php

namespace Sunaoka\Aws\Structures\Connect\GetEvaluationFormValidation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RefId
 * @property string|null $Property
 */
class EvaluationFormValidationFindingItem extends Shape
{
    /**
     * @param array{
     *     RefId?: string|null,
     *     Property?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
