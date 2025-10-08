<?php

namespace Sunaoka\Aws\Structures\WellArchitected\DeleteWorkload;

trait DeleteWorkloadTrait
{
    /**
     * @param DeleteWorkloadRequest $args
     * @return void
     */
    public function deleteWorkload(DeleteWorkloadRequest $args)
    {
        parent::deleteWorkload($args->toArray());
    }
}
