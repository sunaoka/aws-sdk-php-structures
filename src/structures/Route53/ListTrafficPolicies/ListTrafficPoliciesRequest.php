<?php

namespace Sunaoka\Aws\Structures\Route53\ListTrafficPolicies;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TrafficPolicyIdMarker
 * @property string $MaxItems
 */
class ListTrafficPoliciesRequest extends Request
{
    /**
     * @param array{
     *     TrafficPolicyIdMarker?: string,
     *     MaxItems?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
