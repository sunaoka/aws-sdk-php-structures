<?php

namespace Sunaoka\Aws\Structures\QConnect\GetAIAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $instruction
 * @property list<string>|null $examples
 */
class ToolInstruction extends Shape
{
    /**
     * @param array{
     *     instruction?: string|null,
     *     examples?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
