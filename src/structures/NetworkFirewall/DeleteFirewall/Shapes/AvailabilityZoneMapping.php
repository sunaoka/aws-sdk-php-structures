<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DeleteFirewall\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AvailabilityZone
 */
class AvailabilityZoneMapping extends Shape
{
    /**
     * @param array{AvailabilityZone: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
