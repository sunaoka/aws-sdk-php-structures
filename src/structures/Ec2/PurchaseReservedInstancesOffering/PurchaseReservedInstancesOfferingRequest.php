<?php

namespace Sunaoka\Aws\Structures\Ec2\PurchaseReservedInstancesOffering;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $InstanceCount
 * @property string $ReservedInstancesOfferingId
 * @property \Aws\Api\DateTimeResult|null $PurchaseTime
 * @property bool|null $DryRun
 * @property Shapes\ReservedInstanceLimitPrice|null $LimitPrice
 */
class PurchaseReservedInstancesOfferingRequest extends Request
{
    /**
     * @param array{
     *     InstanceCount: int,
     *     ReservedInstancesOfferingId: string,
     *     PurchaseTime?: \Aws\Api\DateTimeResult|null,
     *     DryRun?: bool|null,
     *     LimitPrice?: Shapes\ReservedInstanceLimitPrice|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
