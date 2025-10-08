<?php

namespace Sunaoka\Aws\Structures\Ec2\CancelBundleTask;

trait CancelBundleTaskTrait
{
    /**
     * @param CancelBundleTaskRequest $args
     * @return CancelBundleTaskResponse
     */
    public function cancelBundleTask(CancelBundleTaskRequest $args)
    {
        $result = parent::cancelBundleTask($args->toArray());
        return new CancelBundleTaskResponse($result->toArray());
    }
}
