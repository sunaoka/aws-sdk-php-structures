<?php

namespace Sunaoka\Aws\Structures\AccountAccess\ListEntitlements\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $entitlementId
 * @property EntitlementSummary $entitlement
 * @property \Aws\Api\DateTimeResult $createdAt
 */
class EntitlementsListMember extends Shape
{
    /**
     * @param array{
     *     entitlementId: string,
     *     entitlement: EntitlementSummary,
     *     createdAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
