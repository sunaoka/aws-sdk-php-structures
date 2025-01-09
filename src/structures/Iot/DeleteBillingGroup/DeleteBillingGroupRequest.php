<?php

namespace Sunaoka\Aws\Structures\Iot\DeleteBillingGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $billingGroupName
 * @property int $expectedVersion
 */
class DeleteBillingGroupRequest extends Request
{
    /**
     * @param array{
     *     billingGroupName: string,
     *     expectedVersion?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
