<?php

namespace Sunaoka\Aws\Structures\Chime\BatchDeletePhoneNumber;

trait BatchDeletePhoneNumberTrait
{
    /**
     * @param BatchDeletePhoneNumberRequest $args
     * @return BatchDeletePhoneNumberResponse
     */
    public function batchDeletePhoneNumber(BatchDeletePhoneNumberRequest $args)
    {
        $result = parent::batchDeletePhoneNumber($args->toArray());
        return new BatchDeletePhoneNumberResponse($result->toArray());
    }
}
