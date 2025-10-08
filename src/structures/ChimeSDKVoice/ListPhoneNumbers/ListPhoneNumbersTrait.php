<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\ListPhoneNumbers;

trait ListPhoneNumbersTrait
{
    /**
     * @param ListPhoneNumbersRequest $args
     * @return ListPhoneNumbersResponse
     */
    public function listPhoneNumbers(ListPhoneNumbersRequest $args)
    {
        $result = parent::listPhoneNumbers($args->toArray());
        return new ListPhoneNumbersResponse($result->toArray());
    }
}
