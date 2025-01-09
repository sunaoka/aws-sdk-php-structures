<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetPositionConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Semtech' $Provider
 * @property 'GNSS' $Type
 * @property 'Enabled'|'Disabled' $Status
 * @property 'ROSE'|'NONE' $Fec
 */
class SemtechGnssDetail extends Shape
{
    /**
     * @param array{
     *     Provider?: 'Semtech',
     *     Type?: 'GNSS',
     *     Status?: 'Enabled'|'Disabled',
     *     Fec?: 'ROSE'|'NONE'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
