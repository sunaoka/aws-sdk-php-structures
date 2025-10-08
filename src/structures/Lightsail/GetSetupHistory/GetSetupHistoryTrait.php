<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetSetupHistory;

trait GetSetupHistoryTrait
{
    /**
     * @param GetSetupHistoryRequest $args
     * @return GetSetupHistoryResponse
     */
    public function getSetupHistory(GetSetupHistoryRequest $args)
    {
        $result = parent::getSetupHistory($args->toArray());
        return new GetSetupHistoryResponse($result->toArray());
    }
}
