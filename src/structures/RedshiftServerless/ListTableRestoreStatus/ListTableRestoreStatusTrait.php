<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\ListTableRestoreStatus;

trait ListTableRestoreStatusTrait
{
    /**
     * @param ListTableRestoreStatusRequest $args
     * @return ListTableRestoreStatusResponse
     */
    public function listTableRestoreStatus(ListTableRestoreStatusRequest $args)
    {
        $result = parent::listTableRestoreStatus($args->toArray());
        return new ListTableRestoreStatusResponse($result->toArray());
    }
}
