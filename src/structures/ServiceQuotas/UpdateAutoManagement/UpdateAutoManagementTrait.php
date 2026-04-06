<?php

namespace Sunaoka\Aws\Structures\ServiceQuotas\UpdateAutoManagement;

trait UpdateAutoManagementTrait
{
    /**
     * @param UpdateAutoManagementRequest $args
     * @return UpdateAutoManagementResponse
     */
    public function updateAutoManagement(UpdateAutoManagementRequest $args)
    {
        $result = parent::updateAutoManagement($args->toArray());
        return new UpdateAutoManagementResponse($result->toArray());
    }
}
