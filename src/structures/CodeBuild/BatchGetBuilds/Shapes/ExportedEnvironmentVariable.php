<?php

namespace Sunaoka\Aws\Structures\CodeBuild\BatchGetBuilds\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string|null $value
 */
class ExportedEnvironmentVariable extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     value?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
