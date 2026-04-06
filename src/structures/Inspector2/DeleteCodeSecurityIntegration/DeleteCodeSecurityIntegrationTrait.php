<?php

namespace Sunaoka\Aws\Structures\Inspector2\DeleteCodeSecurityIntegration;

trait DeleteCodeSecurityIntegrationTrait
{
    /**
     * @param DeleteCodeSecurityIntegrationRequest $args
     * @return DeleteCodeSecurityIntegrationResponse
     */
    public function deleteCodeSecurityIntegration(DeleteCodeSecurityIntegrationRequest $args)
    {
        $result = parent::deleteCodeSecurityIntegration($args->toArray());
        return new DeleteCodeSecurityIntegrationResponse($result->toArray());
    }
}
