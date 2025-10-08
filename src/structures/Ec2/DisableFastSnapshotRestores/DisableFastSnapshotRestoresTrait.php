<?php

namespace Sunaoka\Aws\Structures\Ec2\DisableFastSnapshotRestores;

trait DisableFastSnapshotRestoresTrait
{
    /**
     * @param DisableFastSnapshotRestoresRequest $args
     * @return DisableFastSnapshotRestoresResponse
     */
    public function disableFastSnapshotRestores(DisableFastSnapshotRestoresRequest $args)
    {
        $result = parent::disableFastSnapshotRestores($args->toArray());
        return new DisableFastSnapshotRestoresResponse($result->toArray());
    }
}
