<?php

namespace Sunaoka\Aws\Structures\EBS\GetSnapshotBlock;

trait GetSnapshotBlockTrait
{
    /**
     * @param GetSnapshotBlockRequest $args
     * @return GetSnapshotBlockResponse
     */
    public function getSnapshotBlock(GetSnapshotBlockRequest $args)
    {
        $result = parent::getSnapshotBlock($args->toArray());
        return new GetSnapshotBlockResponse($result->toArray());
    }
}
