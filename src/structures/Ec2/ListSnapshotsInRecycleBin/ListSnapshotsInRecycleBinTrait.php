<?php

namespace Sunaoka\Aws\Structures\Ec2\ListSnapshotsInRecycleBin;

trait ListSnapshotsInRecycleBinTrait
{
    /**
     * @param ListSnapshotsInRecycleBinRequest $args
     * @return ListSnapshotsInRecycleBinResponse
     */
    public function listSnapshotsInRecycleBin(ListSnapshotsInRecycleBinRequest $args)
    {
        $result = parent::listSnapshotsInRecycleBin($args->toArray());
        return new ListSnapshotsInRecycleBinResponse($result->toArray());
    }
}
