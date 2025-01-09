<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeEvaluationForm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RefId
 * @property string $Text
 * @property int<0, 10> $Score
 * @property bool $AutomaticFail
 */
class EvaluationFormSingleSelectQuestionOption extends Shape
{
    /**
     * @param array{
     *     RefId: string,
     *     Text: string,
     *     Score?: int<0, 10>,
     *     AutomaticFail?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
