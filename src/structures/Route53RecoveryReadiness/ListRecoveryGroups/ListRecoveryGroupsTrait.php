<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryReadiness\ListRecoveryGroups;

trait ListRecoveryGroupsTrait
{
    /**
     * @param ListRecoveryGroupsRequest $args
     * @return ListRecoveryGroupsResponse
     */
    public function listRecoveryGroups(ListRecoveryGroupsRequest $args)
    {
        $result = parent::listRecoveryGroups($args->toArray());
        return new ListRecoveryGroupsResponse($result->toArray());
    }
}
