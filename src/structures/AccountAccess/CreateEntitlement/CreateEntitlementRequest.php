<?php

namespace Sunaoka\Aws\Structures\AccountAccess\CreateEntitlement;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationArn
 * @property Shapes\Entitlement $entitlement
 */
class CreateEntitlementRequest extends Request
{
    /**
     * @param array{
     *     applicationArn: string,
     *     entitlement: Shapes\Entitlement
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
