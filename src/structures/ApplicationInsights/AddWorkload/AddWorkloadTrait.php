<?php

namespace Sunaoka\Aws\Structures\ApplicationInsights\AddWorkload;

trait AddWorkloadTrait
{
    /**
     * @param AddWorkloadRequest $args
     * @return AddWorkloadResponse
     */
    public function addWorkload(AddWorkloadRequest $args)
    {
        $result = parent::addWorkload($args->toArray());
        return new AddWorkloadResponse($result->toArray());
    }
}
