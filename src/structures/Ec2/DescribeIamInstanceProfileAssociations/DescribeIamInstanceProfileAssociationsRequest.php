<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeIamInstanceProfileAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $AssociationIds
 * @property list<Shapes\Filter>|null $Filters
 * @property int<5, 1000>|null $MaxResults
 * @property string|null $NextToken
 */
class DescribeIamInstanceProfileAssociationsRequest extends Request
{
    /**
     * @param array{
     *     AssociationIds?: list<string>|null,
     *     Filters?: list<Shapes\Filter>|null,
     *     MaxResults?: int<5, 1000>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
