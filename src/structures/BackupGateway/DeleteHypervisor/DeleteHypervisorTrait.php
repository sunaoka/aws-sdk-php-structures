<?php

namespace Sunaoka\Aws\Structures\BackupGateway\DeleteHypervisor;

trait DeleteHypervisorTrait
{
    /**
     * @param DeleteHypervisorRequest $args
     * @return DeleteHypervisorResponse
     */
    public function deleteHypervisor(DeleteHypervisorRequest $args)
    {
        $result = parent::deleteHypervisor($args->toArray());
        return new DeleteHypervisorResponse($result->toArray());
    }
}
