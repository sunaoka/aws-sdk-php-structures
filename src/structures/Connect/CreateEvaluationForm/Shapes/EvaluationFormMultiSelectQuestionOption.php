<?php

namespace Sunaoka\Aws\Structures\Connect\CreateEvaluationForm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RefId
 * @property string $Text
 */
class EvaluationFormMultiSelectQuestionOption extends Shape
{
    /**
     * @param array{
     *     RefId: string,
     *     Text: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
