<?php

namespace Sunaoka\Aws\Structures\MemoryDB\DescribeACLs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ACLName
 * @property int $MaxResults
 * @property string $NextToken
 */
class DescribeACLsRequest extends Request
{
    /**
     * @param array{
     *     ACLName?: string,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
