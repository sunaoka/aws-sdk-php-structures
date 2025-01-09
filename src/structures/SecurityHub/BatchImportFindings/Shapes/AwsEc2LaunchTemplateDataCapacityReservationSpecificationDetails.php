<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CapacityReservationPreference
 * @property AwsEc2LaunchTemplateDataCapacityReservationSpecificationCapacityReservationTargetDetails $CapacityReservationTarget
 */
class AwsEc2LaunchTemplateDataCapacityReservationSpecificationDetails extends Shape
{
    /**
     * @param array{
     *     CapacityReservationPreference?: string,
     *     CapacityReservationTarget?: AwsEc2LaunchTemplateDataCapacityReservationSpecificationCapacityReservationTargetDetails
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
