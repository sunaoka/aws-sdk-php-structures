<?php

namespace Sunaoka\Aws\Structures\Backup\ListRecoveryPointsByLegalHold;

trait ListRecoveryPointsByLegalHoldTrait
{
    /**
     * @param ListRecoveryPointsByLegalHoldRequest $args
     * @return ListRecoveryPointsByLegalHoldResponse
     */
    public function listRecoveryPointsByLegalHold(ListRecoveryPointsByLegalHoldRequest $args)
    {
        $result = parent::listRecoveryPointsByLegalHold($args->toArray());
        return new ListRecoveryPointsByLegalHoldResponse($result->toArray());
    }
}
