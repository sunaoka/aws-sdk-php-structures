<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\GetRecoveryPoint;

trait GetRecoveryPointTrait
{
    /**
     * @param GetRecoveryPointRequest $args
     * @return GetRecoveryPointResponse
     */
    public function getRecoveryPoint(GetRecoveryPointRequest $args)
    {
        $result = parent::getRecoveryPoint($args->toArray());
        return new GetRecoveryPointResponse($result->toArray());
    }
}
