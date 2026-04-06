<?php

namespace Sunaoka\Aws\Structures\ServiceQuotas\StartAutoManagement;

trait StartAutoManagementTrait
{
    /**
     * @param StartAutoManagementRequest $args
     * @return StartAutoManagementResponse
     */
    public function startAutoManagement(StartAutoManagementRequest $args)
    {
        $result = parent::startAutoManagement($args->toArray());
        return new StartAutoManagementResponse($result->toArray());
    }
}
