<?php

namespace Sunaoka\Aws\Structures\AccountAccess\GetEntitlement;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationArn
 * @property string $entitlementId
 */
class GetEntitlementRequest extends Request
{
    /**
     * @param array{
     *     applicationArn: string,
     *     entitlementId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
