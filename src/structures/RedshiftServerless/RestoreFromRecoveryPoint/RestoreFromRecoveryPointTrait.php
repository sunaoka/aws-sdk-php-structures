<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\RestoreFromRecoveryPoint;

trait RestoreFromRecoveryPointTrait
{
    /**
     * @param RestoreFromRecoveryPointRequest $args
     * @return RestoreFromRecoveryPointResponse
     */
    public function restoreFromRecoveryPoint(RestoreFromRecoveryPointRequest $args)
    {
        $result = parent::restoreFromRecoveryPoint($args->toArray());
        return new RestoreFromRecoveryPointResponse($result->toArray());
    }
}
