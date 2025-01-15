<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryReadiness\GetReadinessCheckResourceStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $MessageText
 */
class Message extends Shape
{
    /**
     * @param array{MessageText?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
