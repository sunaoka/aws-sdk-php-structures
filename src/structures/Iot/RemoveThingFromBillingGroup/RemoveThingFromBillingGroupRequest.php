<?php

namespace Sunaoka\Aws\Structures\Iot\RemoveThingFromBillingGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $billingGroupName
 * @property string $billingGroupArn
 * @property string $thingName
 * @property string $thingArn
 */
class RemoveThingFromBillingGroupRequest extends Request
{
    /**
     * @param array{
     *     billingGroupName?: string,
     *     billingGroupArn?: string,
     *     thingName?: string,
     *     thingArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
