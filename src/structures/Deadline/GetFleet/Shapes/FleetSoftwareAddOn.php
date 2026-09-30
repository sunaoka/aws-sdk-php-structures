<?php

namespace Sunaoka\Aws\Structures\Deadline\GetFleet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'docker' $name
 */
class FleetSoftwareAddOn extends Shape
{
    /**
     * @param array{name: 'docker'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
