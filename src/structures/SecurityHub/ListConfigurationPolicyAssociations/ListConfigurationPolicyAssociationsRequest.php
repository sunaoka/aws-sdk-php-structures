<?php

namespace Sunaoka\Aws\Structures\SecurityHub\ListConfigurationPolicyAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 * @property int $MaxResults
 * @property Shapes\AssociationFilters $Filters
 */
class ListConfigurationPolicyAssociationsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string,
     *     MaxResults?: int,
     *     Filters?: Shapes\AssociationFilters
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
