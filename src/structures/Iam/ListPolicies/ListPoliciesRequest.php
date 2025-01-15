<?php

namespace Sunaoka\Aws\Structures\Iam\ListPolicies;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'All'|'AWS'|'Local'|null $Scope
 * @property bool|null $OnlyAttached
 * @property string|null $PathPrefix
 * @property 'PermissionsPolicy'|'PermissionsBoundary'|null $PolicyUsageFilter
 * @property string|null $Marker
 * @property int<1, 1000>|null $MaxItems
 */
class ListPoliciesRequest extends Request
{
    /**
     * @param array{
     *     Scope?: 'All'|'AWS'|'Local'|null,
     *     OnlyAttached?: bool|null,
     *     PathPrefix?: string|null,
     *     PolicyUsageFilter?: 'PermissionsPolicy'|'PermissionsBoundary'|null,
     *     Marker?: string|null,
     *     MaxItems?: int<1, 1000>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
