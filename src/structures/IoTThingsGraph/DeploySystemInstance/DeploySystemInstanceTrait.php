<?php

namespace Sunaoka\Aws\Structures\IoTThingsGraph\DeploySystemInstance;

trait DeploySystemInstanceTrait
{
    /**
     * @param DeploySystemInstanceRequest $args
     * @return DeploySystemInstanceResponse
     */
    public function deploySystemInstance(DeploySystemInstanceRequest $args)
    {
        $result = parent::deploySystemInstance($args->toArray());
        return new DeploySystemInstanceResponse($result->toArray());
    }
}
