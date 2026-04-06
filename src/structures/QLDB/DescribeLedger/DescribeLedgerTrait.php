<?php

namespace Sunaoka\Aws\Structures\QLDB\DescribeLedger;

trait DescribeLedgerTrait
{
    /**
     * @param DescribeLedgerRequest $args
     * @return DescribeLedgerResponse
     */
    public function describeLedger(DescribeLedgerRequest $args)
    {
        $result = parent::describeLedger($args->toArray());
        return new DescribeLedgerResponse($result->toArray());
    }
}
