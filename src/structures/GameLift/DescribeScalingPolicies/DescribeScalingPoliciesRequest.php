<?php

namespace Sunaoka\Aws\Structures\GameLift\DescribeScalingPolicies;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FleetId
 * @property 'ACTIVE'|'UPDATE_REQUESTED'|'UPDATING'|'DELETE_REQUESTED'|'DELETING'|'DELETED'|'ERROR' $StatusFilter
 * @property int<1, max> $Limit
 * @property string $NextToken
 * @property string $Location
 */
class DescribeScalingPoliciesRequest extends Request
{
    /**
     * @param array{
     *     FleetId: string,
     *     StatusFilter?: 'ACTIVE'|'UPDATE_REQUESTED'|'UPDATING'|'DELETE_REQUESTED'|'DELETING'|'DELETED'|'ERROR',
     *     Limit?: int<1, max>,
     *     NextToken?: string,
     *     Location?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
