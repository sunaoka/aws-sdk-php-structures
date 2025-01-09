<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyInstanceCreditSpecification\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $InstanceId
 * @property string $CpuCredits
 */
class InstanceCreditSpecificationRequest extends Shape
{
    /**
     * @param array{
     *     InstanceId: string,
     *     CpuCredits?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
