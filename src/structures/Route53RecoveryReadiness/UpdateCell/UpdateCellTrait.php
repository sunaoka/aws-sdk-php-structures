<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryReadiness\UpdateCell;

trait UpdateCellTrait
{
    /**
     * @param UpdateCellRequest $args
     * @return UpdateCellResponse
     */
    public function updateCell(UpdateCellRequest $args)
    {
        $result = parent::updateCell($args->toArray());
        return new UpdateCellResponse($result->toArray());
    }
}
