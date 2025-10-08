<?php

namespace Sunaoka\Aws\Structures\IoTThingsGraph\UndeploySystemInstance;

trait UndeploySystemInstanceTrait
{
    /**
     * @param UndeploySystemInstanceRequest $args
     * @return UndeploySystemInstanceResponse
     */
    public function undeploySystemInstance(UndeploySystemInstanceRequest $args)
    {
        $result = parent::undeploySystemInstance($args->toArray());
        return new UndeploySystemInstanceResponse($result->toArray());
    }
}
