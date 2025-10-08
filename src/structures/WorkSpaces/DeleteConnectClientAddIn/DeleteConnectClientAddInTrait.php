<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DeleteConnectClientAddIn;

trait DeleteConnectClientAddInTrait
{
    /**
     * @param DeleteConnectClientAddInRequest $args
     * @return DeleteConnectClientAddInResponse
     */
    public function deleteConnectClientAddIn(DeleteConnectClientAddInRequest $args)
    {
        $result = parent::deleteConnectClientAddIn($args->toArray());
        return new DeleteConnectClientAddInResponse($result->toArray());
    }
}
