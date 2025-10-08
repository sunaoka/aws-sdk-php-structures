<?php

namespace Sunaoka\Aws\Structures\ApplicationInsights\UpdateWorkload;

trait UpdateWorkloadTrait
{
    /**
     * @param UpdateWorkloadRequest $args
     * @return UpdateWorkloadResponse
     */
    public function updateWorkload(UpdateWorkloadRequest $args)
    {
        $result = parent::updateWorkload($args->toArray());
        return new UpdateWorkloadResponse($result->toArray());
    }
}
