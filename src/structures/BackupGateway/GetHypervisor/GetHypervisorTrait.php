<?php

namespace Sunaoka\Aws\Structures\BackupGateway\GetHypervisor;

trait GetHypervisorTrait
{
    /**
     * @param GetHypervisorRequest $args
     * @return GetHypervisorResponse
     */
    public function getHypervisor(GetHypervisorRequest $args)
    {
        $result = parent::getHypervisor($args->toArray());
        return new GetHypervisorResponse($result->toArray());
    }
}
