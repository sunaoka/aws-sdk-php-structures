<?php

namespace Sunaoka\Aws\Structures\Backup\ListLegalHolds;

trait ListLegalHoldsTrait
{
    /**
     * @param ListLegalHoldsRequest $args
     * @return ListLegalHoldsResponse
     */
    public function listLegalHolds(ListLegalHoldsRequest $args)
    {
        $result = parent::listLegalHolds($args->toArray());
        return new ListLegalHoldsResponse($result->toArray());
    }
}
