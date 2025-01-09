<?php

namespace Sunaoka\Aws\Structures\Glue\GetSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $PythonVersion
 */
class SessionCommand extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     PythonVersion?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
