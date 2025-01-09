<?php

namespace Sunaoka\Aws\Structures\FSx\DescribeDataRepositoryAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $AssociationIds
 * @property list<Shapes\Filter> $Filters
 * @property int<1, 25> $MaxResults
 * @property string $NextToken
 */
class DescribeDataRepositoryAssociationsRequest extends Request
{
    /**
     * @param array{
     *     AssociationIds?: list<string>,
     *     Filters?: list<Shapes\Filter>,
     *     MaxResults?: int<1, 25>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
