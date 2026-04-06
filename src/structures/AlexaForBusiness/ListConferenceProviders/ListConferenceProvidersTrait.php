<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\ListConferenceProviders;

trait ListConferenceProvidersTrait
{
    /**
     * @param ListConferenceProvidersRequest $args
     * @return ListConferenceProvidersResponse
     */
    public function listConferenceProviders(ListConferenceProvidersRequest $args)
    {
        $result = parent::listConferenceProviders($args->toArray());
        return new ListConferenceProvidersResponse($result->toArray());
    }
}
