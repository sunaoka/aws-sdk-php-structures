<?php

namespace Sunaoka\Aws\Structures\EBS\ListChangedBlocks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FirstSnapshotId
 * @property string $SecondSnapshotId
 * @property string $NextToken
 * @property int $MaxResults
 * @property int $StartingBlockIndex
 */
class ListChangedBlocksRequest extends Request
{
    /**
     * @param array{
     *     FirstSnapshotId?: string,
     *     SecondSnapshotId: string,
     *     NextToken?: string,
     *     MaxResults?: int,
     *     StartingBlockIndex?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
