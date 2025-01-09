<?php

namespace Sunaoka\Aws\Structures\EBS\ListSnapshotBlocks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SnapshotId
 * @property string $NextToken
 * @property int<100, 10000> $MaxResults
 * @property int<0, max> $StartingBlockIndex
 */
class ListSnapshotBlocksRequest extends Request
{
    /**
     * @param array{
     *     SnapshotId: string,
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
