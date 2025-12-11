<?php

namespace Sunaoka\Aws\Structures\Lambda\GetDurableExecutionHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CallbackId
 * @property int<0, max>|null $HeartbeatTimeout
 * @property int<0, max>|null $Timeout
 */
class CallbackStartedDetails extends Shape
{
    /**
     * @param array{
     *     CallbackId: string,
     *     HeartbeatTimeout?: int<0, max>|null,
     *     Timeout?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
