<?php

namespace Sunaoka\Aws\Structures\Ec2\GetCapacityManagerMetricDimensions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'resource-region'|'availability-zone-id'|'account-id'|'instance-family'|'instance-type'|'instance-platform'|'reservation-arn'|'reservation-id'|'reservation-type'|'reservation-create-timestamp'|'reservation-start-timestamp'|'reservation-end-timestamp'|'reservation-end-date-type'|'tenancy'|'reservation-state'|'reservation-instance-match-criteria'|'reservation-unused-financial-owner'|null $Dimension
 * @property 'equals'|'in'|null $Comparison
 * @property list<string>|null $Values
 */
class DimensionCondition extends Shape
{
    /**
     * @param array{
     *     Dimension?: 'resource-region'|'availability-zone-id'|'account-id'|'instance-family'|'instance-type'|'instance-platform'|'reservation-arn'|'reservation-id'|'reservation-type'|'reservation-create-timestamp'|'reservation-start-timestamp'|'reservation-end-timestamp'|'reservation-end-date-type'|'tenancy'|'reservation-state'|'reservation-instance-match-criteria'|'reservation-unused-financial-owner'|null,
     *     Comparison?: 'equals'|'in'|null,
     *     Values?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
