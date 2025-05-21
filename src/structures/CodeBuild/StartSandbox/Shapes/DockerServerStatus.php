<?php

namespace Sunaoka\Aws\Structures\CodeBuild\StartSandbox\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $status
 * @property string|null $message
 */
class DockerServerStatus extends Shape
{
    /**
     * @param array{
     *     status?: string|null,
     *     message?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
