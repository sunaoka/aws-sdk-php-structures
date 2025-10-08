<?php

namespace Sunaoka\Aws\Structures\Connect\CreateQuickConnect;

trait CreateQuickConnectTrait
{
    /**
     * @param CreateQuickConnectRequest $args
     * @return CreateQuickConnectResponse
     */
    public function createQuickConnect(CreateQuickConnectRequest $args)
    {
        $result = parent::createQuickConnect($args->toArray());
        return new CreateQuickConnectResponse($result->toArray());
    }
}
