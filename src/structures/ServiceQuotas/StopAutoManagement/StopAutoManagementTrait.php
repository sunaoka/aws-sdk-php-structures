<?php

namespace Sunaoka\Aws\Structures\ServiceQuotas\StopAutoManagement;

trait StopAutoManagementTrait
{
    /**
     * @param StopAutoManagementRequest $args
     * @return StopAutoManagementResponse
     */
    public function stopAutoManagement(StopAutoManagementRequest $args)
    {
        $result = parent::stopAutoManagement($args->toArray());
        return new StopAutoManagementResponse($result->toArray());
    }
}
