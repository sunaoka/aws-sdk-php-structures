<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyInstanceCreditSpecification\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'InvalidInstanceID.Malformed'|'InvalidInstanceID.NotFound'|'IncorrectInstanceState'|'InstanceCreditSpecification.NotSupported' $Code
 * @property string $Message
 */
class UnsuccessfulInstanceCreditSpecificationItemError extends Shape
{
    /**
     * @param array{
     *     Code?: 'InvalidInstanceID.Malformed'|'InvalidInstanceID.NotFound'|'IncorrectInstanceState'|'InstanceCreditSpecification.NotSupported',
     *     Message?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
