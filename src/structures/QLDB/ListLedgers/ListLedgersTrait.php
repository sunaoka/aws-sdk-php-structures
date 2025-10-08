<?php

namespace Sunaoka\Aws\Structures\QLDB\ListLedgers;

trait ListLedgersTrait
{
    /**
     * @param ListLedgersRequest $args
     * @return ListLedgersResponse
     */
    public function listLedgers(ListLedgersRequest $args)
    {
        $result = parent::listLedgers($args->toArray());
        return new ListLedgersResponse($result->toArray());
    }
}
