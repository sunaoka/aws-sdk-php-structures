<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateEvaluationForm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $MinValue
 * @property int $MaxValue
 * @property int|null $Score
 * @property bool|null $AutomaticFail
 * @property AutomaticFailConfiguration|null $AutomaticFailConfiguration
 */
class EvaluationFormNumericQuestionOption extends Shape
{
    /**
     * @param array{
     *     MinValue: int,
     *     MaxValue: int,
     *     Score?: int|null,
     *     AutomaticFail?: bool|null,
     *     AutomaticFailConfiguration?: AutomaticFailConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
