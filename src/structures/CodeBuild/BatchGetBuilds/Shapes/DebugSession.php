<?php

namespace Sunaoka\Aws\Structures\CodeBuild\BatchGetBuilds\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $sessionEnabled
 * @property string $sessionTarget
 */
class DebugSession extends Shape
{
    /**
     * @param array{
     *     sessionEnabled?: bool,
     *     sessionTarget?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
