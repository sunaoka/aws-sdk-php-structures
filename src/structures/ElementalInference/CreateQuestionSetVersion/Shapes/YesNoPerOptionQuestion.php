<?php

namespace Sunaoka\Aws\Structures\ElementalInference\CreateQuestionSetVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $question
 * @property list<QuestionOption> $options
 */
class YesNoPerOptionQuestion extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     question: string,
     *     options: list<QuestionOption>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
