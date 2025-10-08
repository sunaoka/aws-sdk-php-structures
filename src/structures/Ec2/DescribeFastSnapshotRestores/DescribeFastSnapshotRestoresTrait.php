<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeFastSnapshotRestores;

trait DescribeFastSnapshotRestoresTrait
{
    /**
     * @param DescribeFastSnapshotRestoresRequest $args
     * @return DescribeFastSnapshotRestoresResponse
     */
    public function describeFastSnapshotRestores(DescribeFastSnapshotRestoresRequest $args)
    {
        $result = parent::describeFastSnapshotRestores($args->toArray());
        return new DescribeFastSnapshotRestoresResponse($result->toArray());
    }
}
