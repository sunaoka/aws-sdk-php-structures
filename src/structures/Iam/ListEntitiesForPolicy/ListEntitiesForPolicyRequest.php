<?php

namespace Sunaoka\Aws\Structures\Iam\ListEntitiesForPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PolicyArn
 * @property 'User'|'Role'|'Group'|'LocalManagedPolicy'|'AWSManagedPolicy'|null $EntityFilter
 * @property string|null $PathPrefix
 * @property 'PermissionsPolicy'|'PermissionsBoundary'|null $PolicyUsageFilter
 * @property string|null $Marker
 * @property int<1, 1000>|null $MaxItems
 */
class ListEntitiesForPolicyRequest extends Request
{
    /**
     * @param array{
     *     PolicyArn: string,
     *     EntityFilter?: 'User'|'Role'|'Group'|'LocalManagedPolicy'|'AWSManagedPolicy'|null,
     *     PathPrefix?: string|null,
     *     PolicyUsageFilter?: 'PermissionsPolicy'|'PermissionsBoundary'|null,
     *     Marker?: string|null,
     *     MaxItems?: int<1, 1000>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
