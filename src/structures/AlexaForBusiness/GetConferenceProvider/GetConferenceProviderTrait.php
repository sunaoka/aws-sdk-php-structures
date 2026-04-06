<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\GetConferenceProvider;

trait GetConferenceProviderTrait
{
    /**
     * @param GetConferenceProviderRequest $args
     * @return GetConferenceProviderResponse
     */
    public function getConferenceProvider(GetConferenceProviderRequest $args)
    {
        $result = parent::getConferenceProvider($args->toArray());
        return new GetConferenceProviderResponse($result->toArray());
    }
}
