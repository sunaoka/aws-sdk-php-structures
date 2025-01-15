<?php

namespace Sunaoka\Aws\Structures\DAX\DescribeSubnetGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $SubnetGroupNames
 * @property int|null $MaxResults
 * @property string|null $NextToken
 */
class DescribeSubnetGroupsRequest extends Request
{
    /**
     * @param array{
     *     SubnetGroupNames?: list<string>|null,
     *     MaxResults?: int|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
