<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeCapacityBlocks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $CapacityBlockIds
 * @property string|null $NextToken
 * @property int<1, 1000>|null $MaxResults
 * @property list<Shapes\Filter>|null $Filters
 * @property bool|null $DryRun
 */
class DescribeCapacityBlocksRequest extends Request
{
    /**
     * @param array{
     *     CapacityBlockIds?: list<string>|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 1000>|null,
     *     Filters?: list<Shapes\Filter>|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
