<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateJobFromSourceControl;

trait UpdateJobFromSourceControlTrait
{
    /**
     * @param UpdateJobFromSourceControlRequest $args
     * @return UpdateJobFromSourceControlResponse
     */
    public function updateJobFromSourceControl(UpdateJobFromSourceControlRequest $args)
    {
        $result = parent::updateJobFromSourceControl($args->toArray());
        return new UpdateJobFromSourceControlResponse($result->toArray());
    }
}
