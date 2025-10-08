<?php

namespace Sunaoka\Aws\Structures\StorageGateway\UpdateSMBSecurityStrategy;

trait UpdateSMBSecurityStrategyTrait
{
    /**
     * @param UpdateSMBSecurityStrategyRequest $args
     * @return UpdateSMBSecurityStrategyResponse
     */
    public function updateSMBSecurityStrategy(UpdateSMBSecurityStrategyRequest $args)
    {
        $result = parent::updateSMBSecurityStrategy($args->toArray());
        return new UpdateSMBSecurityStrategyResponse($result->toArray());
    }
}
