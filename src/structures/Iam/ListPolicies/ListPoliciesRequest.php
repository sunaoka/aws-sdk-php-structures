<?php

namespace Sunaoka\Aws\Structures\Iam\ListPolicies;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'All'|'AWS'|'Local' $Scope
 * @property bool $OnlyAttached
 * @property string $PathPrefix
 * @property 'PermissionsPolicy'|'PermissionsBoundary' $PolicyUsageFilter
 * @property string $Marker
 * @property int $MaxItems
 */
class ListPoliciesRequest extends Request
{
    /**
     * @param array{
     *     Scope?: 'All'|'AWS'|'Local',
     *     OnlyAttached?: bool,
     *     PathPrefix?: string,
     *     PolicyUsageFilter?: 'PermissionsPolicy'|'PermissionsBoundary',
     *     Marker?: string,
     *     MaxItems?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
