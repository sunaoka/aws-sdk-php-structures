<?php

namespace Sunaoka\Aws\Structures\Iot\UpdateBillingGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $billingGroupName
 * @property Shapes\BillingGroupProperties $billingGroupProperties
 * @property int $expectedVersion
 */
class UpdateBillingGroupRequest extends Request
{
    /**
     * @param array{
     *     billingGroupName: string,
     *     billingGroupProperties: Shapes\BillingGroupProperties,
     *     expectedVersion?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
