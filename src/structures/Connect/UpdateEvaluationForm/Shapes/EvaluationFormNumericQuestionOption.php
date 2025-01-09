<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateEvaluationForm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $MinValue
 * @property int $MaxValue
 * @property int<0, 10> $Score
 * @property bool $AutomaticFail
 */
class EvaluationFormNumericQuestionOption extends Shape
{
    /**
     * @param array{
     *     MinValue: int,
     *     MaxValue: int,
     *     Score?: int<0, 10>,
     *     AutomaticFail?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
