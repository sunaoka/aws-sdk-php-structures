<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeInventoryDeletions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $DeletionId
 * @property string|null $NextToken
 * @property int<1, 50>|null $MaxResults
 */
class DescribeInventoryDeletionsRequest extends Request
{
    /**
     * @param array{
     *     DeletionId?: string|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 50>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
