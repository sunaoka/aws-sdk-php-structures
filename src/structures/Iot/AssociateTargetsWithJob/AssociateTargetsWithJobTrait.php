<?php

namespace Sunaoka\Aws\Structures\Iot\AssociateTargetsWithJob;

trait AssociateTargetsWithJobTrait
{
    /**
     * @param AssociateTargetsWithJobRequest $args
     * @return AssociateTargetsWithJobResponse
     */
    public function associateTargetsWithJob(AssociateTargetsWithJobRequest $args)
    {
        $result = parent::associateTargetsWithJob($args->toArray());
        return new AssociateTargetsWithJobResponse($result->toArray());
    }
}
