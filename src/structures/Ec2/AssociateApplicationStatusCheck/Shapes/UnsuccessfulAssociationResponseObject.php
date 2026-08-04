<?php

namespace Sunaoka\Aws\Structures\Ec2\AssociateApplicationStatusCheck\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ApplicationStatusCheckId
 * @property string|null $AssociationType
 * @property string|null $AssociationValue
 * @property string|null $Reason
 */
class UnsuccessfulAssociationResponseObject extends Shape
{
    /**
     * @param array{
     *     ApplicationStatusCheckId?: string|null,
     *     AssociationType?: string|null,
     *     AssociationValue?: string|null,
     *     Reason?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
