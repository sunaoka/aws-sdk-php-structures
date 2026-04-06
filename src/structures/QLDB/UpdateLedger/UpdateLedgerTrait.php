<?php

namespace Sunaoka\Aws\Structures\QLDB\UpdateLedger;

trait UpdateLedgerTrait
{
    /**
     * @param UpdateLedgerRequest $args
     * @return UpdateLedgerResponse
     */
    public function updateLedger(UpdateLedgerRequest $args)
    {
        $result = parent::updateLedger($args->toArray());
        return new UpdateLedgerResponse($result->toArray());
    }
}
