<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListCodeSecurityIntegrations;

trait ListCodeSecurityIntegrationsTrait
{
    /**
     * @param ListCodeSecurityIntegrationsRequest $args
     * @return ListCodeSecurityIntegrationsResponse
     */
    public function listCodeSecurityIntegrations(ListCodeSecurityIntegrationsRequest $args)
    {
        $result = parent::listCodeSecurityIntegrations($args->toArray());
        return new ListCodeSecurityIntegrationsResponse($result->toArray());
    }
}
