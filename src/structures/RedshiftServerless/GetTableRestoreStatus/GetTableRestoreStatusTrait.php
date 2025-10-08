<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\GetTableRestoreStatus;

trait GetTableRestoreStatusTrait
{
    /**
     * @param GetTableRestoreStatusRequest $args
     * @return GetTableRestoreStatusResponse
     */
    public function getTableRestoreStatus(GetTableRestoreStatusRequest $args)
    {
        $result = parent::getTableRestoreStatus($args->toArray());
        return new GetTableRestoreStatusResponse($result->toArray());
    }
}
