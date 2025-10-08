<?php

namespace Sunaoka\Aws\Structures\WellArchitected\UpdateWorkloadShare;

trait UpdateWorkloadShareTrait
{
    /**
     * @param UpdateWorkloadShareRequest $args
     * @return UpdateWorkloadShareResponse
     */
    public function updateWorkloadShare(UpdateWorkloadShareRequest $args)
    {
        $result = parent::updateWorkloadShare($args->toArray());
        return new UpdateWorkloadShareResponse($result->toArray());
    }
}
