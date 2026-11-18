<?php

namespace Sunaoka\Aws\Structures\ElementalInference\GetQuestionSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $text
 */
class QuestionOption extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     text: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
