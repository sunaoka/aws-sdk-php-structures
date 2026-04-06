<?php

namespace Sunaoka\Aws\Structures\Ec2\PurchaseReservedInstancesOffering;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $InstanceCount
 * @property string $ReservedInstancesOfferingId
 * @property bool|null $DryRun
 * @property Shapes\ReservedInstanceLimitPrice|null $LimitPrice
 * @property \Aws\Api\DateTimeResult|null $PurchaseTime
 */
class PurchaseReservedInstancesOfferingRequest extends Request
{
    /**
     * @param array{
     *     InstanceCount: int,
     *     ReservedInstancesOfferingId: string,
     *     DryRun?: bool|null,
     *     LimitPrice?: Shapes\ReservedInstanceLimitPrice|null,
     *     PurchaseTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
