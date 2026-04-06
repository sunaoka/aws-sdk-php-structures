<?php

namespace Sunaoka\Aws\Structures\SecurityHub\ListConfigurationPolicyAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 * @property Shapes\AssociationFilters|null $Filters
 */
class ListConfigurationPolicyAssociationsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null,
     *     Filters?: Shapes\AssociationFilters|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
