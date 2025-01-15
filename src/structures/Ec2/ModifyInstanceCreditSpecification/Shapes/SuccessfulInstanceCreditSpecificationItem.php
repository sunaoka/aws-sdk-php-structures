<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyInstanceCreditSpecification\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $InstanceId
 */
class SuccessfulInstanceCreditSpecificationItem extends Shape
{
    /**
     * @param array{InstanceId?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
