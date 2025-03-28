<?php

namespace Sunaoka\Aws\Structures\Glue\CreateSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $PythonVersion
 */
class SessionCommand extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     PythonVersion?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
