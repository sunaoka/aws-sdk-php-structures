<?php

namespace Sunaoka\Aws\Structures\ElementalInference\CreateQuestionSetVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $question
 */
class YesNoQuestion extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     question: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
