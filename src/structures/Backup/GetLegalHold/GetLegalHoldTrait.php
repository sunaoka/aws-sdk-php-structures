<?php

namespace Sunaoka\Aws\Structures\Backup\GetLegalHold;

trait GetLegalHoldTrait
{
    /**
     * @param GetLegalHoldRequest $args
     * @return GetLegalHoldResponse
     */
    public function getLegalHold(GetLegalHoldRequest $args)
    {
        $result = parent::getLegalHold($args->toArray());
        return new GetLegalHoldResponse($result->toArray());
    }
}
