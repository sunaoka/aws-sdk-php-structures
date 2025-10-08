<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\BatchUpdatePhoneNumber;

trait BatchUpdatePhoneNumberTrait
{
    /**
     * @param BatchUpdatePhoneNumberRequest $args
     * @return BatchUpdatePhoneNumberResponse
     */
    public function batchUpdatePhoneNumber(BatchUpdatePhoneNumberRequest $args)
    {
        $result = parent::batchUpdatePhoneNumber($args->toArray());
        return new BatchUpdatePhoneNumberResponse($result->toArray());
    }
}
