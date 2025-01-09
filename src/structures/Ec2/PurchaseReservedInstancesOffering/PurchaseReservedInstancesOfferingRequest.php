<?php

namespace Sunaoka\Aws\Structures\Ec2\PurchaseReservedInstancesOffering;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $InstanceCount
 * @property string $ReservedInstancesOfferingId
 * @property \Aws\Api\DateTimeResult $PurchaseTime
 * @property bool $DryRun
 * @property Shapes\ReservedInstanceLimitPrice $LimitPrice
 */
class PurchaseReservedInstancesOfferingRequest extends Request
{
    /**
     * @param array{
     *     InstanceCount: int,
     *     ReservedInstancesOfferingId: string,
     *     PurchaseTime?: \Aws\Api\DateTimeResult,
     *     DryRun?: bool,
     *     LimitPrice?: Shapes\ReservedInstanceLimitPrice
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
