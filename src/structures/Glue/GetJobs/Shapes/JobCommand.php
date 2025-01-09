<?php

namespace Sunaoka\Aws\Structures\Glue\GetJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $ScriptLocation
 * @property string $PythonVersion
 * @property string $Runtime
 */
class JobCommand extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     ScriptLocation?: string,
     *     PythonVersion?: string,
     *     Runtime?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
