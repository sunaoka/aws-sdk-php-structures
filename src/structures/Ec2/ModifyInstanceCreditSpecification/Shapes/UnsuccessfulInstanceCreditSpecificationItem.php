<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyInstanceCreditSpecification\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $InstanceId
 * @property UnsuccessfulInstanceCreditSpecificationItemError $Error
 */
class UnsuccessfulInstanceCreditSpecificationItem extends Shape
{
    /**
     * @param array{
     *     InstanceId?: string,
     *     Error?: UnsuccessfulInstanceCreditSpecificationItemError
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
