<?php

namespace Sunaoka\Aws\Structures\EventBridge\RemoveTargets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TargetId
 * @property string $ErrorCode
 * @property string $ErrorMessage
 */
class RemoveTargetsResultEntry extends Shape
{
    /**
     * @param array{
     *     TargetId?: string,
     *     ErrorCode?: string,
     *     ErrorMessage?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
