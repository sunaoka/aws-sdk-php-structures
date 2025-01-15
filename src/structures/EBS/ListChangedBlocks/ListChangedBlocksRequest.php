<?php

namespace Sunaoka\Aws\Structures\EBS\ListChangedBlocks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $FirstSnapshotId
 * @property string $SecondSnapshotId
 * @property string|null $NextToken
 * @property int<100, 10000>|null $MaxResults
 * @property int<0, max>|null $StartingBlockIndex
 */
class ListChangedBlocksRequest extends Request
{
    /**
     * @param array{
     *     FirstSnapshotId?: string|null,
     *     SecondSnapshotId: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<100, 10000>|null,
     *     StartingBlockIndex?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
