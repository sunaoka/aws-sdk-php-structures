<?php

namespace Sunaoka\Aws\Structures\FSx\DescribeDataRepositoryAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $AssociationIds
 * @property list<Shapes\Filter>|null $Filters
 * @property int<1, 25>|null $MaxResults
 * @property string|null $NextToken
 */
class DescribeDataRepositoryAssociationsRequest extends Request
{
    /**
     * @param array{
     *     AssociationIds?: list<string>|null,
     *     Filters?: list<Shapes\Filter>|null,
     *     MaxResults?: int<1, 25>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
