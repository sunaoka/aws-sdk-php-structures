<?php

namespace Sunaoka\Aws\Structures\CloudFormation\ListTypes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'PUBLIC'|'PRIVATE'|null $Visibility
 * @property 'NON_PROVISIONABLE'|'IMMUTABLE'|'FULLY_MUTABLE'|null $ProvisioningType
 * @property 'LIVE'|'DEPRECATED'|null $DeprecatedStatus
 * @property 'RESOURCE'|'MODULE'|'HOOK'|null $Type
 * @property Shapes\TypeFilters|null $Filters
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListTypesRequest extends Request
{
    /**
     * @param array{
     *     Visibility?: 'PUBLIC'|'PRIVATE'|null,
     *     ProvisioningType?: 'NON_PROVISIONABLE'|'IMMUTABLE'|'FULLY_MUTABLE'|null,
     *     DeprecatedStatus?: 'LIVE'|'DEPRECATED'|null,
     *     Type?: 'RESOURCE'|'MODULE'|'HOOK'|null,
     *     Filters?: Shapes\TypeFilters|null,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
