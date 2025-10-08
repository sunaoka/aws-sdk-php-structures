<?php

namespace Sunaoka\Aws\Structures\Ec2\EnableFastSnapshotRestores;

trait EnableFastSnapshotRestoresTrait
{
    /**
     * @param EnableFastSnapshotRestoresRequest $args
     * @return EnableFastSnapshotRestoresResponse
     */
    public function enableFastSnapshotRestores(EnableFastSnapshotRestoresRequest $args)
    {
        $result = parent::enableFastSnapshotRestores($args->toArray());
        return new EnableFastSnapshotRestoresResponse($result->toArray());
    }
}
