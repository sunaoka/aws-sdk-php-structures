<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\SearchAvailablePhoneNumbers;

trait SearchAvailablePhoneNumbersTrait
{
    /**
     * @param SearchAvailablePhoneNumbersRequest $args
     * @return SearchAvailablePhoneNumbersResponse
     */
    public function searchAvailablePhoneNumbers(SearchAvailablePhoneNumbersRequest $args)
    {
        $result = parent::searchAvailablePhoneNumbers($args->toArray());
        return new SearchAvailablePhoneNumbersResponse($result->toArray());
    }
}
