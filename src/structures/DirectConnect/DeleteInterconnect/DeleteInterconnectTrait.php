<?php

namespace Sunaoka\Aws\Structures\DirectConnect\DeleteInterconnect;

trait DeleteInterconnectTrait
{
    /**
     * @param DeleteInterconnectRequest $args
     * @return DeleteInterconnectResponse
     */
    public function deleteInterconnect(DeleteInterconnectRequest $args)
    {
        $result = parent::deleteInterconnect($args->toArray());
        return new DeleteInterconnectResponse($result->toArray());
    }
}
