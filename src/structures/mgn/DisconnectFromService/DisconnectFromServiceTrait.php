<?php

namespace Sunaoka\Aws\Structures\mgn\DisconnectFromService;

trait DisconnectFromServiceTrait
{
    /**
     * @param DisconnectFromServiceRequest $args
     * @return DisconnectFromServiceResponse
     */
    public function disconnectFromService(DisconnectFromServiceRequest $args)
    {
        $result = parent::disconnectFromService($args->toArray());
        return new DisconnectFromServiceResponse($result->toArray());
    }
}
