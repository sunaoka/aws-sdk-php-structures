<?php

namespace Sunaoka\Aws\Structures\MediaConnect\GrantFlowEntitlements;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\GrantEntitlementRequest> $Entitlements
 * @property string $FlowArn
 */
class GrantFlowEntitlementsRequest extends Request
{
    /**
     * @param array{
     *     Entitlements: list<Shapes\GrantEntitlementRequest>,
     *     FlowArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
