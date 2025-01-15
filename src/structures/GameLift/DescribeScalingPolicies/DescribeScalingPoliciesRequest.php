<?php

namespace Sunaoka\Aws\Structures\GameLift\DescribeScalingPolicies;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FleetId
 * @property 'ACTIVE'|'UPDATE_REQUESTED'|'UPDATING'|'DELETE_REQUESTED'|'DELETING'|'DELETED'|'ERROR'|null $StatusFilter
 * @property int<1, max>|null $Limit
 * @property string|null $NextToken
 * @property string|null $Location
 */
class DescribeScalingPoliciesRequest extends Request
{
    /**
     * @param array{
     *     FleetId: string,
     *     StatusFilter?: 'ACTIVE'|'UPDATE_REQUESTED'|'UPDATING'|'DELETE_REQUESTED'|'DELETING'|'DELETED'|'ERROR'|null,
     *     Limit?: int<1, max>|null,
     *     NextToken?: string|null,
     *     Location?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
