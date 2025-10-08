<?php

namespace Sunaoka\Aws\Structures\QLDB\CreateLedger;

trait CreateLedgerTrait
{
    /**
     * @param CreateLedgerRequest $args
     * @return CreateLedgerResponse
     */
    public function createLedger(CreateLedgerRequest $args)
    {
        $result = parent::createLedger($args->toArray());
        return new CreateLedgerResponse($result->toArray());
    }
}
