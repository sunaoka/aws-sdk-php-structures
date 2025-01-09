<?php

namespace Sunaoka\Aws\Structures\EBS\ListChangedBlocks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FirstSnapshotId
 * @property string $SecondSnapshotId
 * @property string $NextToken
 * @property int<100, 10000> $MaxResults
 * @property int<0, max> $StartingBlockIndex
 */
class ListChangedBlocksRequest extends Request
{
    /**
     * @param array{
     *     FirstSnapshotId?: string,
     *     SecondSnapshotId: string,
     *     NextToken?: string,
     *     MaxResults?: int<100, 10000>,
     *     StartingBlockIndex?: int<0, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
