<?php

namespace Sunaoka\Aws\Structures\BackupGateway\UpdateHypervisor;

trait UpdateHypervisorTrait
{
    /**
     * @param UpdateHypervisorRequest $args
     * @return UpdateHypervisorResponse
     */
    public function updateHypervisor(UpdateHypervisorRequest $args)
    {
        $result = parent::updateHypervisor($args->toArray());
        return new UpdateHypervisorResponse($result->toArray());
    }
}
