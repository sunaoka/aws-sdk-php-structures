<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\ListApplicationProviders;

trait ListApplicationProvidersTrait
{
    /**
     * @param ListApplicationProvidersRequest $args
     * @return ListApplicationProvidersResponse
     */
    public function listApplicationProviders(ListApplicationProvidersRequest $args)
    {
        $result = parent::listApplicationProviders($args->toArray());
        return new ListApplicationProvidersResponse($result->toArray());
    }
}
