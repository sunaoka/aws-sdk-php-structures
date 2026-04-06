<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\DeleteConferenceProvider;

trait DeleteConferenceProviderTrait
{
    /**
     * @param DeleteConferenceProviderRequest $args
     * @return DeleteConferenceProviderResponse
     */
    public function deleteConferenceProvider(DeleteConferenceProviderRequest $args)
    {
        $result = parent::deleteConferenceProvider($args->toArray());
        return new DeleteConferenceProviderResponse($result->toArray());
    }
}
