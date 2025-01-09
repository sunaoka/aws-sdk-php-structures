<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CapacityReservationId
 * @property string $CapacityReservationResourceGroupArn
 */
class AwsEc2LaunchTemplateDataCapacityReservationSpecificationCapacityReservationTargetDetails extends Shape
{
    /**
     * @param array{
     *     CapacityReservationId?: string,
     *     CapacityReservationResourceGroupArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
