<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CapacityReservationId
 * @property string|null $CapacityReservationResourceGroupArn
 */
class AwsEc2LaunchTemplateDataCapacityReservationSpecificationCapacityReservationTargetDetails extends Shape
{
    /**
     * @param array{
     *     CapacityReservationId?: string|null,
     *     CapacityReservationResourceGroupArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
