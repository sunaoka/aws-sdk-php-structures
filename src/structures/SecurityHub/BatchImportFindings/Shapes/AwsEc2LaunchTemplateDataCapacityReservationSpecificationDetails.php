<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CapacityReservationPreference
 * @property AwsEc2LaunchTemplateDataCapacityReservationSpecificationCapacityReservationTargetDetails|null $CapacityReservationTarget
 */
class AwsEc2LaunchTemplateDataCapacityReservationSpecificationDetails extends Shape
{
    /**
     * @param array{
     *     CapacityReservationPreference?: string|null,
     *     CapacityReservationTarget?: AwsEc2LaunchTemplateDataCapacityReservationSpecificationCapacityReservationTargetDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
