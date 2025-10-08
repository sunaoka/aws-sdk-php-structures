<?php

namespace Sunaoka\Aws\Structures\FSx\ReleaseFileSystemNfsV3Locks;

trait ReleaseFileSystemNfsV3LocksTrait
{
    /**
     * @param ReleaseFileSystemNfsV3LocksRequest $args
     * @return ReleaseFileSystemNfsV3LocksResponse
     */
    public function releaseFileSystemNfsV3Locks(ReleaseFileSystemNfsV3LocksRequest $args)
    {
        $result = parent::releaseFileSystemNfsV3Locks($args->toArray());
        return new ReleaseFileSystemNfsV3LocksResponse($result->toArray());
    }
}
