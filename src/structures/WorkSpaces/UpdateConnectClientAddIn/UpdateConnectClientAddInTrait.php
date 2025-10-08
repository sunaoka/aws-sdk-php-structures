<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\UpdateConnectClientAddIn;

trait UpdateConnectClientAddInTrait
{
    /**
     * @param UpdateConnectClientAddInRequest $args
     * @return UpdateConnectClientAddInResponse
     */
    public function updateConnectClientAddIn(UpdateConnectClientAddInRequest $args)
    {
        $result = parent::updateConnectClientAddIn($args->toArray());
        return new UpdateConnectClientAddInResponse($result->toArray());
    }
}
