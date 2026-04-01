<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\ListNotifyCountries;

trait ListNotifyCountriesTrait
{
    /**
     * @param ListNotifyCountriesRequest $args
     * @return ListNotifyCountriesResponse
     */
    public function listNotifyCountries(ListNotifyCountriesRequest $args)
    {
        $result = parent::listNotifyCountries($args->toArray());
        return new ListNotifyCountriesResponse($result->toArray());
    }
}
