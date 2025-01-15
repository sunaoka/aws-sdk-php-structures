<?php

namespace Sunaoka\Aws\Structures\Ssm\ListAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\AssociationFilter>|null $AssociationFilterList
 * @property int<1, 50>|null $MaxResults
 * @property string|null $NextToken
 */
class ListAssociationsRequest extends Request
{
    /**
     * @param array{
     *     AssociationFilterList?: list<Shapes\AssociationFilter>|null,
     *     MaxResults?: int<1, 50>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
