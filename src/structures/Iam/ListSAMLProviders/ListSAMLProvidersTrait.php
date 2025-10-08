<?php

namespace Sunaoka\Aws\Structures\Iam\ListSAMLProviders;

trait ListSAMLProvidersTrait
{
    /**
     * @param ListSAMLProvidersRequest $args
     * @return ListSAMLProvidersResponse
     */
    public function listSAMLProviders(ListSAMLProvidersRequest $args)
    {
        $result = parent::listSAMLProviders($args->toArray());
        return new ListSAMLProvidersResponse($result->toArray());
    }
}
