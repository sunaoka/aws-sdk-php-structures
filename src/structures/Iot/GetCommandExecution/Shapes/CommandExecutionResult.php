<?php

namespace Sunaoka\Aws\Structures\Iot\GetCommandExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $S
 * @property bool $B
 * @property string $BIN
 */
class CommandExecutionResult extends Shape
{
    /**
     * @param array{
     *     S?: string,
     *     B?: bool,
     *     BIN?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
