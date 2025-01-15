<?php

namespace Sunaoka\Aws\Structures\Route53\ListTrafficPolicies;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $TrafficPolicyIdMarker
 * @property string|null $MaxItems
 */
class ListTrafficPoliciesRequest extends Request
{
    /**
     * @param array{
     *     TrafficPolicyIdMarker?: string|null,
     *     MaxItems?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
