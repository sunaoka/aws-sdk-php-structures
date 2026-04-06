<?php

namespace Sunaoka\Aws\Structures\PcaConnectorAd\ListServicePrincipalNames;

trait ListServicePrincipalNamesTrait
{
    /**
     * @param ListServicePrincipalNamesRequest $args
     * @return ListServicePrincipalNamesResponse
     */
    public function listServicePrincipalNames(ListServicePrincipalNamesRequest $args)
    {
        $result = parent::listServicePrincipalNames($args->toArray());
        return new ListServicePrincipalNamesResponse($result->toArray());
    }
}
