<?php

namespace Sunaoka\Aws\Structures\DAX\DescribeSubnetGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $SubnetGroupNames
 * @property int $MaxResults
 * @property string $NextToken
 */
class DescribeSubnetGroupsRequest extends Request
{
    /**
     * @param array{
     *     SubnetGroupNames?: list<string>,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
