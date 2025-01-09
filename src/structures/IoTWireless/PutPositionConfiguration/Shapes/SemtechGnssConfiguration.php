<?php

namespace Sunaoka\Aws\Structures\IoTWireless\PutPositionConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Enabled'|'Disabled' $Status
 * @property 'ROSE'|'NONE' $Fec
 */
class SemtechGnssConfiguration extends Shape
{
    /**
     * @param array{
     *     Status: 'Enabled'|'Disabled',
     *     Fec: 'ROSE'|'NONE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
