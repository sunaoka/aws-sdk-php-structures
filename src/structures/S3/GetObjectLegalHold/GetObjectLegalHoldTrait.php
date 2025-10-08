<?php

namespace Sunaoka\Aws\Structures\S3\GetObjectLegalHold;

trait GetObjectLegalHoldTrait
{
    /**
     * @param GetObjectLegalHoldRequest $args
     * @return GetObjectLegalHoldResponse
     */
    public function getObjectLegalHold(GetObjectLegalHoldRequest $args)
    {
        $result = parent::getObjectLegalHold($args->toArray());
        return new GetObjectLegalHoldResponse($result->toArray());
    }
}
