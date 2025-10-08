<?php

namespace Sunaoka\Aws\Structures\Backup\DisassociateRecoveryPointFromParent;

trait DisassociateRecoveryPointFromParentTrait
{
    /**
     * @param DisassociateRecoveryPointFromParentRequest $args
     * @return void
     */
    public function disassociateRecoveryPointFromParent(DisassociateRecoveryPointFromParentRequest $args)
    {
        parent::disassociateRecoveryPointFromParent($args->toArray());
    }
}
