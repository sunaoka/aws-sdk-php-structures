<?php

namespace Sunaoka\Aws\Structures\Backup\CreateBackupAccessPoint;

trait CreateBackupAccessPointTrait
{
    /**
     * @param CreateBackupAccessPointRequest $args
     * @return CreateBackupAccessPointResponse
     */
    public function createBackupAccessPoint(CreateBackupAccessPointRequest $args)
    {
        $result = parent::createBackupAccessPoint($args->toArray());
        return new CreateBackupAccessPointResponse($result->toArray());
    }
}
