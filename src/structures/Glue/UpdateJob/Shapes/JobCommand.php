<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $ScriptLocation
 * @property string|null $PythonVersion
 * @property string|null $Runtime
 */
class JobCommand extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     ScriptLocation?: string|null,
     *     PythonVersion?: string|null,
     *     Runtime?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
