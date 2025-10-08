<?php

namespace Sunaoka\Aws\Structures\EBS\PutSnapshotBlock;

trait PutSnapshotBlockTrait
{
    /**
     * @param PutSnapshotBlockRequest $args
     * @return PutSnapshotBlockResponse
     */
    public function putSnapshotBlock(PutSnapshotBlockRequest $args)
    {
        $result = parent::putSnapshotBlock($args->toArray());
        return new PutSnapshotBlockResponse($result->toArray());
    }
}
