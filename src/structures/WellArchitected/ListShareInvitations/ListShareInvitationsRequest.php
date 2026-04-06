<?php

namespace Sunaoka\Aws\Structures\WellArchitected\ListShareInvitations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $WorkloadNamePrefix
 * @property string|null $LensNamePrefix
 * @property 'WORKLOAD'|'LENS'|'PROFILE'|null $ShareResourceType
 * @property string|null $NextToken
 * @property int<1, 50>|null $MaxResults
 * @property string|null $ProfileNamePrefix
 */
class ListShareInvitationsRequest extends Request
{
    /**
     * @param array{
     *     WorkloadNamePrefix?: string|null,
     *     LensNamePrefix?: string|null,
     *     ShareResourceType?: 'WORKLOAD'|'LENS'|'PROFILE'|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 50>|null,
     *     ProfileNamePrefix?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
