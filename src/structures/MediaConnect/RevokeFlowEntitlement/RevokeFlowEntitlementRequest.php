<?php

namespace Sunaoka\Aws\Structures\MediaConnect\RevokeFlowEntitlement;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EntitlementArn
 * @property string $FlowArn
 */
class RevokeFlowEntitlementRequest extends Request
{
    /**
     * @param array{
     *     EntitlementArn: string,
     *     FlowArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
