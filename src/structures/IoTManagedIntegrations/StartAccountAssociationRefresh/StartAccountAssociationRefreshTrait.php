<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\StartAccountAssociationRefresh;

trait StartAccountAssociationRefreshTrait
{
    /**
     * @param StartAccountAssociationRefreshRequest $args
     * @return StartAccountAssociationRefreshResponse
     */
    public function startAccountAssociationRefresh(StartAccountAssociationRefreshRequest $args)
    {
        $result = parent::startAccountAssociationRefresh($args->toArray());
        return new StartAccountAssociationRefreshResponse($result->toArray());
    }
}
