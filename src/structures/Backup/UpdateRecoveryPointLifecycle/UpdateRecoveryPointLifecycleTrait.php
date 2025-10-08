<?php

namespace Sunaoka\Aws\Structures\Backup\UpdateRecoveryPointLifecycle;

trait UpdateRecoveryPointLifecycleTrait
{
    /**
     * @param UpdateRecoveryPointLifecycleRequest $args
     * @return UpdateRecoveryPointLifecycleResponse
     */
    public function updateRecoveryPointLifecycle(UpdateRecoveryPointLifecycleRequest $args)
    {
        $result = parent::updateRecoveryPointLifecycle($args->toArray());
        return new UpdateRecoveryPointLifecycleResponse($result->toArray());
    }
}
