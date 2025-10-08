<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\CreateConnectClientAddIn;

trait CreateConnectClientAddInTrait
{
    /**
     * @param CreateConnectClientAddInRequest $args
     * @return CreateConnectClientAddInResponse
     */
    public function createConnectClientAddIn(CreateConnectClientAddInRequest $args)
    {
        $result = parent::createConnectClientAddIn($args->toArray());
        return new CreateConnectClientAddInResponse($result->toArray());
    }
}
