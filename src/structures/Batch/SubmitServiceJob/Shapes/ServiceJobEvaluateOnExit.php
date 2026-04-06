<?php

namespace Sunaoka\Aws\Structures\Batch\SubmitServiceJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'RETRY'|'EXIT'|null $action
 * @property string|null $onStatusReason
 */
class ServiceJobEvaluateOnExit extends Shape
{
    /**
     * @param array{
     *     action?: 'RETRY'|'EXIT'|null,
     *     onStatusReason?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
