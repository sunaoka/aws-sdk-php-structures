<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryReadiness\DeleteCell;

trait DeleteCellTrait
{
    /**
     * @param DeleteCellRequest $args
     * @return void
     */
    public function deleteCell(DeleteCellRequest $args)
    {
        parent::deleteCell($args->toArray());
    }
}
