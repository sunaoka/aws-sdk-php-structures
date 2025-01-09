<?php

namespace Sunaoka\Aws\Structures\CloudFormation\ListTypes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'PUBLIC'|'PRIVATE' $Visibility
 * @property 'NON_PROVISIONABLE'|'IMMUTABLE'|'FULLY_MUTABLE' $ProvisioningType
 * @property 'LIVE'|'DEPRECATED' $DeprecatedStatus
 * @property 'RESOURCE'|'MODULE'|'HOOK' $Type
 * @property Shapes\TypeFilters $Filters
 * @property int<1, 100> $MaxResults
 * @property string $NextToken
 */
class ListTypesRequest extends Request
{
    /**
     * @param array{
     *     Visibility?: 'PUBLIC'|'PRIVATE',
     *     ProvisioningType?: 'NON_PROVISIONABLE'|'IMMUTABLE'|'FULLY_MUTABLE',
     *     DeprecatedStatus?: 'LIVE'|'DEPRECATED',
     *     Type?: 'RESOURCE'|'MODULE'|'HOOK',
     *     Filters?: Shapes\TypeFilters,
     *     MaxResults?: int<1, 100>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
