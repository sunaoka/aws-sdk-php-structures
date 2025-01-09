<?php

namespace Sunaoka\Aws\Structures\Iam\ListEntitiesForPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PolicyArn
 * @property 'User'|'Role'|'Group'|'LocalManagedPolicy'|'AWSManagedPolicy' $EntityFilter
 * @property string $PathPrefix
 * @property 'PermissionsPolicy'|'PermissionsBoundary' $PolicyUsageFilter
 * @property string $Marker
 * @property int<1, 1000> $MaxItems
 */
class ListEntitiesForPolicyRequest extends Request
{
    /**
     * @param array{
     *     PolicyArn: string,
     *     EntityFilter?: 'User'|'Role'|'Group'|'LocalManagedPolicy'|'AWSManagedPolicy',
     *     PathPrefix?: string,
     *     PolicyUsageFilter?: 'PermissionsPolicy'|'PermissionsBoundary',
     *     Marker?: string,
     *     MaxItems?: int<1, 1000>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
