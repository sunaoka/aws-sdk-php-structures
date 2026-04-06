<?php

namespace Sunaoka\Aws\Structures\Ssm\GetExecutionPreview\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $Count
 * @property string|null $TargetType
 */
class TargetPreview extends Shape
{
    /**
     * @param array{
     *     Count?: int|null,
     *     TargetType?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
