<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryReadiness\ListCells;

trait ListCellsTrait
{
    /**
     * @param ListCellsRequest $args
     * @return ListCellsResponse
     */
    public function listCells(ListCellsRequest $args)
    {
        $result = parent::listCells($args->toArray());
        return new ListCellsResponse($result->toArray());
    }
}
