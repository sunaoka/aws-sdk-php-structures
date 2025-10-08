<?php

namespace Sunaoka\Aws\Structures\Ec2\RestoreSnapshotFromRecycleBin;

trait RestoreSnapshotFromRecycleBinTrait
{
    /**
     * @param RestoreSnapshotFromRecycleBinRequest $args
     * @return RestoreSnapshotFromRecycleBinResponse
     */
    public function restoreSnapshotFromRecycleBin(RestoreSnapshotFromRecycleBinRequest $args)
    {
        $result = parent::restoreSnapshotFromRecycleBin($args->toArray());
        return new RestoreSnapshotFromRecycleBinResponse($result->toArray());
    }
}
