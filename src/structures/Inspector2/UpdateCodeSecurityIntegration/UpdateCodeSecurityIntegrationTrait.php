<?php

namespace Sunaoka\Aws\Structures\Inspector2\UpdateCodeSecurityIntegration;

trait UpdateCodeSecurityIntegrationTrait
{
    /**
     * @param UpdateCodeSecurityIntegrationRequest $args
     * @return UpdateCodeSecurityIntegrationResponse
     */
    public function updateCodeSecurityIntegration(UpdateCodeSecurityIntegrationRequest $args)
    {
        $result = parent::updateCodeSecurityIntegration($args->toArray());
        return new UpdateCodeSecurityIntegrationResponse($result->toArray());
    }
}
