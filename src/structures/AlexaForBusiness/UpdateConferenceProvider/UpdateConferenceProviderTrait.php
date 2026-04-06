<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\UpdateConferenceProvider;

trait UpdateConferenceProviderTrait
{
    /**
     * @param UpdateConferenceProviderRequest $args
     * @return UpdateConferenceProviderResponse
     */
    public function updateConferenceProvider(UpdateConferenceProviderRequest $args)
    {
        $result = parent::updateConferenceProvider($args->toArray());
        return new UpdateConferenceProviderResponse($result->toArray());
    }
}
