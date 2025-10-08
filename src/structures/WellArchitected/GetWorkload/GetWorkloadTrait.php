<?php

namespace Sunaoka\Aws\Structures\WellArchitected\GetWorkload;

trait GetWorkloadTrait
{
    /**
     * @param GetWorkloadRequest $args
     * @return GetWorkloadResponse
     */
    public function getWorkload(GetWorkloadRequest $args)
    {
        $result = parent::getWorkload($args->toArray());
        return new GetWorkloadResponse($result->toArray());
    }
}
