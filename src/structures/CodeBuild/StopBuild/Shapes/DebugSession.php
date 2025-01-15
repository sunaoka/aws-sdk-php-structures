<?php

namespace Sunaoka\Aws\Structures\CodeBuild\StopBuild\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $sessionEnabled
 * @property string|null $sessionTarget
 */
class DebugSession extends Shape
{
    /**
     * @param array{
     *     sessionEnabled?: bool|null,
     *     sessionTarget?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
