<?php

namespace Sunaoka\Aws\Structures\Ec2\EnableCapacityManager;

trait EnableCapacityManagerTrait
{
    /**
     * @param EnableCapacityManagerRequest $args
     * @return EnableCapacityManagerResponse
     */
    public function enableCapacityManager(EnableCapacityManagerRequest $args)
    {
        $result = parent::enableCapacityManager($args->toArray());
        return new EnableCapacityManagerResponse($result->toArray());
    }
}
