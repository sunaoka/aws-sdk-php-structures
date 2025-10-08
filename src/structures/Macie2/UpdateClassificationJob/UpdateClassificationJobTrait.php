<?php

namespace Sunaoka\Aws\Structures\Macie2\UpdateClassificationJob;

trait UpdateClassificationJobTrait
{
    /**
     * @param UpdateClassificationJobRequest $args
     * @return UpdateClassificationJobResponse
     */
    public function updateClassificationJob(UpdateClassificationJobRequest $args)
    {
        $result = parent::updateClassificationJob($args->toArray());
        return new UpdateClassificationJobResponse($result->toArray());
    }
}
