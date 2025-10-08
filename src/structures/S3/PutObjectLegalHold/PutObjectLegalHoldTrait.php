<?php

namespace Sunaoka\Aws\Structures\S3\PutObjectLegalHold;

trait PutObjectLegalHoldTrait
{
    /**
     * @param PutObjectLegalHoldRequest $args
     * @return PutObjectLegalHoldResponse
     */
    public function putObjectLegalHold(PutObjectLegalHoldRequest $args)
    {
        $result = parent::putObjectLegalHold($args->toArray());
        return new PutObjectLegalHoldResponse($result->toArray());
    }
}
