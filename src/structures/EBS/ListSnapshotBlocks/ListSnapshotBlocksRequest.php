<?php

namespace Sunaoka\Aws\Structures\EBS\ListSnapshotBlocks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SnapshotId
 * @property string $NextToken
 * @property int $MaxResults
 * @property int $StartingBlockIndex
 */
class ListSnapshotBlocksRequest extends Request
{
    /**
     * @param array{
     *     SnapshotId: string,
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
