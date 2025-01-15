<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetPositionConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Semtech'|null $Provider
 * @property 'GNSS'|null $Type
 * @property 'Enabled'|'Disabled'|null $Status
 * @property 'ROSE'|'NONE'|null $Fec
 */
class SemtechGnssDetail extends Shape
{
    /**
     * @param array{
     *     Provider?: 'Semtech'|null,
     *     Type?: 'GNSS'|null,
     *     Status?: 'Enabled'|'Disabled'|null,
     *     Fec?: 'ROSE'|'NONE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
