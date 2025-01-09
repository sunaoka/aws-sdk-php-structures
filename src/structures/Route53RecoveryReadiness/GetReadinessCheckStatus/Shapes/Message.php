<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryReadiness\GetReadinessCheckStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MessageText
 */
class Message extends Shape
{
    /**
     * @param array{MessageText?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
