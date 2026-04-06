<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\GetPoliciesStats;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\AccessPolicyStats|null $AccessPolicyStats
 * @property Shapes\LifecyclePolicyStats|null $LifecyclePolicyStats
 * @property Shapes\SecurityConfigStats|null $SecurityConfigStats
 * @property Shapes\SecurityPolicyStats|null $SecurityPolicyStats
 * @property int|null $TotalPolicyCount
 */
class GetPoliciesStatsResponse extends Response
{
}
