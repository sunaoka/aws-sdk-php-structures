<?php

namespace Sunaoka\Aws\Structures\Backup\GetRecoveryPointIndexDetails;

trait GetRecoveryPointIndexDetailsTrait
{
    /**
     * @param GetRecoveryPointIndexDetailsRequest $args
     * @return GetRecoveryPointIndexDetailsResponse
     */
    public function getRecoveryPointIndexDetails(GetRecoveryPointIndexDetailsRequest $args)
    {
        $result = parent::getRecoveryPointIndexDetails($args->toArray());
        return new GetRecoveryPointIndexDetailsResponse($result->toArray());
    }
}
