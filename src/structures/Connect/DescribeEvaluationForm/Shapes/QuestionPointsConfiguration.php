<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeEvaluationForm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 100>|null $MaxPointValue
 * @property int<0, 100>|null $MinPointValue
 * @property bool|null $IsBonus
 */
class QuestionPointsConfiguration extends Shape
{
    /**
     * @param array{
     *     MaxPointValue?: int<0, 100>|null,
     *     MinPointValue?: int<0, 100>|null,
     *     IsBonus?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
