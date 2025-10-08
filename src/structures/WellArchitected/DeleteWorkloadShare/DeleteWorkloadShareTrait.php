<?php

namespace Sunaoka\Aws\Structures\WellArchitected\DeleteWorkloadShare;

trait DeleteWorkloadShareTrait
{
    /**
     * @param DeleteWorkloadShareRequest $args
     * @return void
     */
    public function deleteWorkloadShare(DeleteWorkloadShareRequest $args)
    {
        parent::deleteWorkloadShare($args->toArray());
    }
}
