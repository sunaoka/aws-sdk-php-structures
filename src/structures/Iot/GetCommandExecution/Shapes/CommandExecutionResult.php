<?php

namespace Sunaoka\Aws\Structures\Iot\GetCommandExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $S
 * @property bool $B
 * @property \Psr\Http\Message\StreamInterface $BIN
 */
class CommandExecutionResult extends Shape
{
    /**
     * @param array{
     *     S?: string,
     *     B?: bool,
     *     BIN?: \Psr\Http\Message\StreamInterface
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
