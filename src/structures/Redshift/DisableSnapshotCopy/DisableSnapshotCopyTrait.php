<?php

namespace Sunaoka\Aws\Structures\Redshift\DisableSnapshotCopy;

trait DisableSnapshotCopyTrait
{
    /**
     * @param DisableSnapshotCopyRequest $args
     * @return DisableSnapshotCopyResponse
     */
    public function disableSnapshotCopy(DisableSnapshotCopyRequest $args)
    {
        $result = parent::disableSnapshotCopy($args->toArray());
        return new DisableSnapshotCopyResponse($result->toArray());
    }
}
