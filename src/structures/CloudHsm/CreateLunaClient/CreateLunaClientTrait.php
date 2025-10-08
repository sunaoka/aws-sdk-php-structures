<?php

namespace Sunaoka\Aws\Structures\CloudHsm\CreateLunaClient;

trait CreateLunaClientTrait
{
    /**
     * @param CreateLunaClientRequest $args
     * @return CreateLunaClientResponse
     */
    public function createLunaClient(CreateLunaClientRequest $args)
    {
        $result = parent::createLunaClient($args->toArray());
        return new CreateLunaClientResponse($result->toArray());
    }
}
