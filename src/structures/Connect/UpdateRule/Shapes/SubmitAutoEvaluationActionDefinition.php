<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EvaluationFormId
 */
class SubmitAutoEvaluationActionDefinition extends Shape
{
    /**
     * @param array{EvaluationFormId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
