<?php

namespace Sunaoka\Aws\Structures\IoTThingsGraph\CreateSystemInstance;

trait CreateSystemInstanceTrait
{
    /**
     * @param CreateSystemInstanceRequest $args
     * @return CreateSystemInstanceResponse
     */
    public function createSystemInstance(CreateSystemInstanceRequest $args)
    {
        $result = parent::createSystemInstance($args->toArray());
        return new CreateSystemInstanceResponse($result->toArray());
    }
}
