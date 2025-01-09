<?php

namespace Sunaoka\Aws\Structures\Ssm\GetExecutionPreview\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Count
 * @property string $TargetType
 */
class TargetPreview extends Shape
{
    /**
     * @param array{
     *     Count?: int,
     *     TargetType?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
