<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateEvaluationForm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RefId
 * @property string $Text
 * @property int $Score
 * @property bool $AutomaticFail
 */
class EvaluationFormSingleSelectQuestionOption extends Shape
{
    /**
     * @param array{
     *     RefId: string,
     *     Text: string,
     *     Score?: int,
     *     AutomaticFail?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
