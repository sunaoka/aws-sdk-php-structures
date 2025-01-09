<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeIamInstanceProfileAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $AssociationIds
 * @property list<Shapes\Filter> $Filters
 * @property int $MaxResults
 * @property string $NextToken
 */
class DescribeIamInstanceProfileAssociationsRequest extends Request
{
    /**
     * @param array{
     *     AssociationIds?: list<string>,
     *     Filters?: list<Shapes\Filter>,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
