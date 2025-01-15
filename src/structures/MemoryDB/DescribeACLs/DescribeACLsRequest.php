<?php

namespace Sunaoka\Aws\Structures\MemoryDB\DescribeACLs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ACLName
 * @property int|null $MaxResults
 * @property string|null $NextToken
 */
class DescribeACLsRequest extends Request
{
    /**
     * @param array{
     *     ACLName?: string|null,
     *     MaxResults?: int|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
