<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\CreateIntent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $questionField
 * @property string $answerField
 */
class ExactResponseFields extends Shape
{
    /**
     * @param array{
     *     questionField: string,
     *     answerField: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
