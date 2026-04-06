<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\CreateConferenceProvider;

trait CreateConferenceProviderTrait
{
    /**
     * @param CreateConferenceProviderRequest $args
     * @return CreateConferenceProviderResponse
     */
    public function createConferenceProvider(CreateConferenceProviderRequest $args)
    {
        $result = parent::createConferenceProvider($args->toArray());
        return new CreateConferenceProviderResponse($result->toArray());
    }
}
