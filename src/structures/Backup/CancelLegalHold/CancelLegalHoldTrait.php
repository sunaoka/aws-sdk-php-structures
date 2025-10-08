<?php

namespace Sunaoka\Aws\Structures\Backup\CancelLegalHold;

trait CancelLegalHoldTrait
{
    /**
     * @param CancelLegalHoldRequest $args
     * @return CancelLegalHoldResponse
     */
    public function cancelLegalHold(CancelLegalHoldRequest $args)
    {
        $result = parent::cancelLegalHold($args->toArray());
        return new CancelLegalHoldResponse($result->toArray());
    }
}
