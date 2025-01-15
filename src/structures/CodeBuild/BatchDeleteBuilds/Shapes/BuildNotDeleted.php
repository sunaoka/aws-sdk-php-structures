<?php

namespace Sunaoka\Aws\Structures\CodeBuild\BatchDeleteBuilds\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property string|null $statusCode
 */
class BuildNotDeleted extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     statusCode?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
