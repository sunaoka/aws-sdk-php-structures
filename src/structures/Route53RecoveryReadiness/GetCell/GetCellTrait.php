<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryReadiness\GetCell;

trait GetCellTrait
{
    /**
     * @param GetCellRequest $args
     * @return GetCellResponse
     */
    public function getCell(GetCellRequest $args)
    {
        $result = parent::getCell($args->toArray());
        return new GetCellResponse($result->toArray());
    }
}
