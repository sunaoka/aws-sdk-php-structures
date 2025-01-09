<?php

namespace Sunaoka\Aws\Structures\Route53\GetAccountLimit;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'MAX_HEALTH_CHECKS_BY_OWNER'|'MAX_HOSTED_ZONES_BY_OWNER'|'MAX_TRAFFIC_POLICY_INSTANCES_BY_OWNER'|'MAX_REUSABLE_DELEGATION_SETS_BY_OWNER'|'MAX_TRAFFIC_POLICIES_BY_OWNER' $Type
 */
class GetAccountLimitRequest extends Request
{
    /**
     * @param array{Type: 'MAX_HEALTH_CHECKS_BY_OWNER'|'MAX_HOSTED_ZONES_BY_OWNER'|'MAX_TRAFFIC_POLICY_INSTANCES_BY_OWNER'|'MAX_REUSABLE_DELEGATION_SETS_BY_OWNER'|'MAX_TRAFFIC_POLICIES_BY_OWNER'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
