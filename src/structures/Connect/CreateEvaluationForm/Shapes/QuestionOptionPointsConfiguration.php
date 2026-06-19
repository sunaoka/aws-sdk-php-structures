<?php

namespace Sunaoka\Aws\Structures\Connect\CreateEvaluationForm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 100> $PointValue
 * @property bool|null $IsBonus
 */
class QuestionOptionPointsConfiguration extends Shape
{
    /**
     * @param array{
     *     PointValue: int<0, 100>,
     *     IsBonus?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
