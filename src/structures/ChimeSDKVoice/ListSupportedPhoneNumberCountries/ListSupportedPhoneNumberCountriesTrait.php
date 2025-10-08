<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\ListSupportedPhoneNumberCountries;

trait ListSupportedPhoneNumberCountriesTrait
{
    /**
     * @param ListSupportedPhoneNumberCountriesRequest $args
     * @return ListSupportedPhoneNumberCountriesResponse
     */
    public function listSupportedPhoneNumberCountries(ListSupportedPhoneNumberCountriesRequest $args)
    {
        $result = parent::listSupportedPhoneNumberCountries($args->toArray());
        return new ListSupportedPhoneNumberCountriesResponse($result->toArray());
    }
}
