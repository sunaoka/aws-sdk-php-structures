<?php

namespace Sunaoka\Aws\Structures\EBS\ListSnapshotBlocks;

trait ListSnapshotBlocksTrait
{
    /**
     * @param ListSnapshotBlocksRequest $args
     * @return ListSnapshotBlocksResponse
     */
    public function listSnapshotBlocks(ListSnapshotBlocksRequest $args)
    {
        $result = parent::listSnapshotBlocks($args->toArray());
        return new ListSnapshotBlocksResponse($result->toArray());
    }
}
