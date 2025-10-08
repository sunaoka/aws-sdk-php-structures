<?php

namespace Sunaoka\Aws\Structures\Backup\DisassociateRecoveryPoint;

trait DisassociateRecoveryPointTrait
{
    /**
     * @param DisassociateRecoveryPointRequest $args
     * @return void
     */
    public function disassociateRecoveryPoint(DisassociateRecoveryPointRequest $args)
    {
        parent::disassociateRecoveryPoint($args->toArray());
    }
}
