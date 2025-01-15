<?php

namespace Sunaoka\Aws\Structures\Iot\RemoveThingFromBillingGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $billingGroupName
 * @property string|null $billingGroupArn
 * @property string|null $thingName
 * @property string|null $thingArn
 */
class RemoveThingFromBillingGroupRequest extends Request
{
    /**
     * @param array{
     *     billingGroupName?: string|null,
     *     billingGroupArn?: string|null,
     *     thingName?: string|null,
     *     thingArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
