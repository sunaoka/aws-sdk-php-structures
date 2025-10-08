<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateSourceControlFromJob;

trait UpdateSourceControlFromJobTrait
{
    /**
     * @param UpdateSourceControlFromJobRequest $args
     * @return UpdateSourceControlFromJobResponse
     */
    public function updateSourceControlFromJob(UpdateSourceControlFromJobRequest $args)
    {
        $result = parent::updateSourceControlFromJob($args->toArray());
        return new UpdateSourceControlFromJobResponse($result->toArray());
    }
}
