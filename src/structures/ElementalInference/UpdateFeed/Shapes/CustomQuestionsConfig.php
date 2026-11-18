<?php

namespace Sunaoka\Aws\Structures\ElementalInference\UpdateFeed\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property QuestionSetReference|null $shot
 * @property QuestionSetReference|null $scene
 */
class CustomQuestionsConfig extends Shape
{
    /**
     * @param array{
     *     shot?: QuestionSetReference|null,
     *     scene?: QuestionSetReference|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
