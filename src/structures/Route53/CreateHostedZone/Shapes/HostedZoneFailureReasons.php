<?php

namespace Sunaoka\Aws\Structures\Route53\CreateHostedZone\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AcceleratedRecovery
 */
class HostedZoneFailureReasons extends Shape
{
    /**
     * @param array{AcceleratedRecovery?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
