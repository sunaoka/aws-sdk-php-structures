<?php

namespace Sunaoka\Aws\Structures\Iot\AddThingToBillingGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $billingGroupName
 * @property string $billingGroupArn
 * @property string $thingName
 * @property string $thingArn
 */
class AddThingToBillingGroupRequest extends Request
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
