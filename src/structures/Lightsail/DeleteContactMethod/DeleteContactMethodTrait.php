<?php

namespace Sunaoka\Aws\Structures\Lightsail\DeleteContactMethod;

trait DeleteContactMethodTrait
{
    /**
     * @param DeleteContactMethodRequest $args
     * @return DeleteContactMethodResponse
     */
    public function deleteContactMethod(DeleteContactMethodRequest $args)
    {
        $result = parent::deleteContactMethod($args->toArray());
        return new DeleteContactMethodResponse($result->toArray());
    }
}
