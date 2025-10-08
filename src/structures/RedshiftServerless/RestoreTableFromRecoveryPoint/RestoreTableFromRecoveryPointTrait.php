<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\RestoreTableFromRecoveryPoint;

trait RestoreTableFromRecoveryPointTrait
{
    /**
     * @param RestoreTableFromRecoveryPointRequest $args
     * @return RestoreTableFromRecoveryPointResponse
     */
    public function restoreTableFromRecoveryPoint(RestoreTableFromRecoveryPointRequest $args)
    {
        $result = parent::restoreTableFromRecoveryPoint($args->toArray());
        return new RestoreTableFromRecoveryPointResponse($result->toArray());
    }
}
