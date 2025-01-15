<?php

namespace Sunaoka\Aws\Structures\CodeCatalyst\StartDevEnvironmentSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $command
 * @property list<string>|null $arguments
 */
class ExecuteCommandSessionConfiguration extends Shape
{
    /**
     * @param array{
     *     command: string,
     *     arguments?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
