<?php

namespace Sunaoka\Aws\Structures\ServiceDiscovery\GetInstance;

trait GetInstanceTrait
{
    /**
     * @param GetInstanceRequest $args
     * @return GetInstanceResponse
     */
    public function getInstance(GetInstanceRequest $args)
    {
        $result = parent::getInstance($args->toArray());
        return new GetInstanceResponse($result->toArray());
    }
}
