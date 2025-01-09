<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeInventoryDeletions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DeletionId
 * @property string $NextToken
 * @property int<1, 50> $MaxResults
 */
class DescribeInventoryDeletionsRequest extends Request
{
    /**
     * @param array{
     *     DeletionId?: string,
     *     NextToken?: string,
     *     MaxResults?: int<1, 50>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
