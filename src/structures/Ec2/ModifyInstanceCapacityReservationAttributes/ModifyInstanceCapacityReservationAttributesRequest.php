<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyInstanceCapacityReservationAttributes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property Shapes\CapacityReservationSpecification $CapacityReservationSpecification
 * @property bool|null $DryRun
 */
class ModifyInstanceCapacityReservationAttributesRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     CapacityReservationSpecification: Shapes\CapacityReservationSpecification,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
