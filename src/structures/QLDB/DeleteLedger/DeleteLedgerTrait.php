<?php

namespace Sunaoka\Aws\Structures\QLDB\DeleteLedger;

trait DeleteLedgerTrait
{
    /**
     * @param DeleteLedgerRequest $args
     * @return void
     */
    public function deleteLedger(DeleteLedgerRequest $args)
    {
        parent::deleteLedger($args->toArray());
    }
}
