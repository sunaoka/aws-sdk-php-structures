<?php

namespace Sunaoka\Aws\Structures\Ec2\DisableCapacityManager;

trait DisableCapacityManagerTrait
{
    /**
     * @param DisableCapacityManagerRequest $args
     * @return DisableCapacityManagerResponse
     */
    public function disableCapacityManager(DisableCapacityManagerRequest $args)
    {
        $result = parent::disableCapacityManager($args->toArray());
        return new DisableCapacityManagerResponse($result->toArray());
    }
}
