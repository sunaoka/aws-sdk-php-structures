<?php

namespace Sunaoka\Aws\Structures\ApplicationInsights\RemoveWorkload;

trait RemoveWorkloadTrait
{
    /**
     * @param RemoveWorkloadRequest $args
     * @return RemoveWorkloadResponse
     */
    public function removeWorkload(RemoveWorkloadRequest $args)
    {
        $result = parent::removeWorkload($args->toArray());
        return new RemoveWorkloadResponse($result->toArray());
    }
}
