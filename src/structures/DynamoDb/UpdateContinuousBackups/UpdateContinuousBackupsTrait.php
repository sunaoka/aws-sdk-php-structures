<?php

namespace Sunaoka\Aws\Structures\DynamoDb\UpdateContinuousBackups;

trait UpdateContinuousBackupsTrait
{
    /**
     * @param UpdateContinuousBackupsRequest $args
     * @return UpdateContinuousBackupsResponse
     */
    public function updateContinuousBackups(UpdateContinuousBackupsRequest $args)
    {
        $result = parent::updateContinuousBackups($args->toArray());
        return new UpdateContinuousBackupsResponse($result->toArray());
    }
}
