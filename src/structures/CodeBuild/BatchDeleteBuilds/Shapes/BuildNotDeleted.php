<?php

namespace Sunaoka\Aws\Structures\CodeBuild\BatchDeleteBuilds\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $statusCode
 */
class BuildNotDeleted extends Shape
{
    /**
     * @param array{
     *     id?: string,
     *     statusCode?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
