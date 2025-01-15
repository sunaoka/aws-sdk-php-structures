<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyInstanceCreditSpecification\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $InstanceId
 * @property UnsuccessfulInstanceCreditSpecificationItemError|null $Error
 */
class UnsuccessfulInstanceCreditSpecificationItem extends Shape
{
    /**
     * @param array{
     *     InstanceId?: string|null,
     *     Error?: UnsuccessfulInstanceCreditSpecificationItemError|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
