<?php

namespace Sunaoka\Aws\Structures\ResourceGroups\CancelTagSyncTask;

trait CancelTagSyncTaskTrait
{
    /**
     * @param CancelTagSyncTaskRequest $args
     * @return void
     */
    public function cancelTagSyncTask(CancelTagSyncTaskRequest $args)
    {
        parent::cancelTagSyncTask($args->toArray());
    }
}
