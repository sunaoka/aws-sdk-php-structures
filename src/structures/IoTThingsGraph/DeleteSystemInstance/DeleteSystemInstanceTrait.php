<?php

namespace Sunaoka\Aws\Structures\IoTThingsGraph\DeleteSystemInstance;

trait DeleteSystemInstanceTrait
{
    /**
     * @param DeleteSystemInstanceRequest $args
     * @return DeleteSystemInstanceResponse
     */
    public function deleteSystemInstance(DeleteSystemInstanceRequest $args)
    {
        $result = parent::deleteSystemInstance($args->toArray());
        return new DeleteSystemInstanceResponse($result->toArray());
    }
}
