<?php

namespace Sunaoka\Aws\Structures\Redshift\EnableSnapshotCopy;

trait EnableSnapshotCopyTrait
{
    /**
     * @param EnableSnapshotCopyRequest $args
     * @return EnableSnapshotCopyResponse
     */
    public function enableSnapshotCopy(EnableSnapshotCopyRequest $args)
    {
        $result = parent::enableSnapshotCopy($args->toArray());
        return new EnableSnapshotCopyResponse($result->toArray());
    }
}
