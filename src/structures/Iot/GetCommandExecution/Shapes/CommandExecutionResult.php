<?php

namespace Sunaoka\Aws\Structures\Iot\GetCommandExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $S
 * @property bool|null $B
 * @property \Psr\Http\Message\StreamInterface|null $BIN
 */
class CommandExecutionResult extends Shape
{
    /**
     * @param array{
     *     S?: string|null,
     *     B?: bool|null,
     *     BIN?: \Psr\Http\Message\StreamInterface|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
