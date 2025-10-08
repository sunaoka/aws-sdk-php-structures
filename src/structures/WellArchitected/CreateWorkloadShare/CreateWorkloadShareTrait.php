<?php

namespace Sunaoka\Aws\Structures\WellArchitected\CreateWorkloadShare;

trait CreateWorkloadShareTrait
{
    /**
     * @param CreateWorkloadShareRequest $args
     * @return CreateWorkloadShareResponse
     */
    public function createWorkloadShare(CreateWorkloadShareRequest $args)
    {
        $result = parent::createWorkloadShare($args->toArray());
        return new CreateWorkloadShareResponse($result->toArray());
    }
}
