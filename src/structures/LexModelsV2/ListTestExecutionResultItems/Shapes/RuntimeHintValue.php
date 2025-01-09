<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListTestExecutionResultItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $phrase
 */
class RuntimeHintValue extends Shape
{
    /**
     * @param array{phrase: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
