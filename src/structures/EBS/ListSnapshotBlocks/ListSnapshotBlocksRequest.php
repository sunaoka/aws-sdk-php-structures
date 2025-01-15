<?php

namespace Sunaoka\Aws\Structures\EBS\ListSnapshotBlocks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SnapshotId
 * @property string|null $NextToken
 * @property int<100, 10000>|null $MaxResults
 * @property int<0, max>|null $StartingBlockIndex
 */
class ListSnapshotBlocksRequest extends Request
{
    /**
     * @param array{
     *     SnapshotId: string,
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
