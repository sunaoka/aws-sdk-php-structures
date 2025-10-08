<?php

namespace Sunaoka\Aws\Structures\IoTThingsGraph\GetSystemInstance;

trait GetSystemInstanceTrait
{
    /**
     * @param GetSystemInstanceRequest $args
     * @return GetSystemInstanceResponse
     */
    public function getSystemInstance(GetSystemInstanceRequest $args)
    {
        $result = parent::getSystemInstance($args->toArray());
        return new GetSystemInstanceResponse($result->toArray());
    }
}
