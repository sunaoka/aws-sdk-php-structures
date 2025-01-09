<?php

namespace Sunaoka\Aws\Structures\CodeBuild\StopBuild\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $value
 */
class ExportedEnvironmentVariable extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     value?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
