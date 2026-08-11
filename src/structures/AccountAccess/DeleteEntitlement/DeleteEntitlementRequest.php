<?php

namespace Sunaoka\Aws\Structures\AccountAccess\DeleteEntitlement;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationArn
 * @property string $entitlementId
 */
class DeleteEntitlementRequest extends Request
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
