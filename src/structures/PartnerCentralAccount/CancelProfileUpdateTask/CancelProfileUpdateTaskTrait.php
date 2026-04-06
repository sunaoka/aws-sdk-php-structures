<?php

namespace Sunaoka\Aws\Structures\PartnerCentralAccount\CancelProfileUpdateTask;

trait CancelProfileUpdateTaskTrait
{
    /**
     * @param CancelProfileUpdateTaskRequest $args
     * @return CancelProfileUpdateTaskResponse
     */
    public function cancelProfileUpdateTask(CancelProfileUpdateTaskRequest $args)
    {
        $result = parent::cancelProfileUpdateTask($args->toArray());
        return new CancelProfileUpdateTaskResponse($result->toArray());
    }
}
