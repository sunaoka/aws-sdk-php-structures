<?php

namespace Sunaoka\Aws\Structures\Connect\CreateEvaluationForm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $MinValue
 * @property int $MaxValue
 * @property int $Score
 * @property bool $AutomaticFail
 */
class EvaluationFormNumericQuestionOption extends Shape
{
    /**
     * @param array{
     *     MinValue: int,
     *     MaxValue: int,
     *     Score?: int,
     *     AutomaticFail?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
