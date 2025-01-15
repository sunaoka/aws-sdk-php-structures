<?php

namespace Sunaoka\Aws\Structures\EventBridge\PutTargets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TargetId
 * @property string|null $ErrorCode
 * @property string|null $ErrorMessage
 */
class PutTargetsResultEntry extends Shape
{
    /**
     * @param array{
     *     TargetId?: string|null,
     *     ErrorCode?: string|null,
     *     ErrorMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
