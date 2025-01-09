<?php

namespace Sunaoka\Aws\Structures\Ssm\ListAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\AssociationFilter> $AssociationFilterList
 * @property int $MaxResults
 * @property string $NextToken
 */
class ListAssociationsRequest extends Request
{
    /**
     * @param array{
     *     AssociationFilterList?: list<Shapes\AssociationFilter>,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
