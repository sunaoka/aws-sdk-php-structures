<?php

namespace Sunaoka\Aws\Structures\CloudHsm\DeleteLunaClient;

trait DeleteLunaClientTrait
{
    /**
     * @param DeleteLunaClientRequest $args
     * @return DeleteLunaClientResponse
     */
    public function deleteLunaClient(DeleteLunaClientRequest $args)
    {
        $result = parent::deleteLunaClient($args->toArray());
        return new DeleteLunaClientResponse($result->toArray());
    }
}
