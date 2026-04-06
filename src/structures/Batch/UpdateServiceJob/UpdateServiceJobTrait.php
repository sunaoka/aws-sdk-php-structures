<?php

namespace Sunaoka\Aws\Structures\Batch\UpdateServiceJob;

trait UpdateServiceJobTrait
{
    /**
     * @param UpdateServiceJobRequest $args
     * @return UpdateServiceJobResponse
     */
    public function updateServiceJob(UpdateServiceJobRequest $args)
    {
        $result = parent::updateServiceJob($args->toArray());
        return new UpdateServiceJobResponse($result->toArray());
    }
}
