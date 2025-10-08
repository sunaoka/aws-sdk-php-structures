<?php

namespace Sunaoka\Aws\Structures\QBusiness\GetChatResponseConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property InstructionCollection|null $instructionCollection
 */
class ResponseConfiguration extends Shape
{
    /**
     * @param array{instructionCollection?: InstructionCollection|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
