<?php

namespace Sunaoka\Aws\Structures\Ec2\GetDefaultCreditSpecification\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 't2'|'t3'|'t3a'|'t4g'|null $InstanceFamily
 * @property string|null $CpuCredits
 */
class InstanceFamilyCreditSpecification extends Shape
{
    /**
     * @param array{
     *     InstanceFamily?: 't2'|'t3'|'t3a'|'t4g'|null,
     *     CpuCredits?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
