<?php

namespace Sunaoka\Aws\Structures\DataPipeline\SetTaskStatus;

trait SetTaskStatusTrait
{
    /**
     * @param SetTaskStatusRequest $args
     * @return SetTaskStatusResponse
     */
    public function setTaskStatus(SetTaskStatusRequest $args)
    {
        $result = parent::setTaskStatus($args->toArray());
        return new SetTaskStatusResponse($result->toArray());
    }
}
