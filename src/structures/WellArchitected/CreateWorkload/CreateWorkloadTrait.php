<?php

namespace Sunaoka\Aws\Structures\WellArchitected\CreateWorkload;

trait CreateWorkloadTrait
{
    /**
     * @param CreateWorkloadRequest $args
     * @return CreateWorkloadResponse
     */
    public function createWorkload(CreateWorkloadRequest $args)
    {
        $result = parent::createWorkload($args->toArray());
        return new CreateWorkloadResponse($result->toArray());
    }
}
