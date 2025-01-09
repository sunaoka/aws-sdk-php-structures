<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyDefaultCreditSpecification\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 't2'|'t3'|'t3a'|'t4g' $InstanceFamily
 * @property string $CpuCredits
 */
class InstanceFamilyCreditSpecification extends Shape
{
    /**
     * @param array{
     *     InstanceFamily?: 't2'|'t3'|'t3a'|'t4g',
     *     CpuCredits?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
