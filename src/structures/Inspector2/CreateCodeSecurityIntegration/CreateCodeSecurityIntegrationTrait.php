<?php

namespace Sunaoka\Aws\Structures\Inspector2\CreateCodeSecurityIntegration;

trait CreateCodeSecurityIntegrationTrait
{
    /**
     * @param CreateCodeSecurityIntegrationRequest $args
     * @return CreateCodeSecurityIntegrationResponse
     */
    public function createCodeSecurityIntegration(CreateCodeSecurityIntegrationRequest $args)
    {
        $result = parent::createCodeSecurityIntegration($args->toArray());
        return new CreateCodeSecurityIntegrationResponse($result->toArray());
    }
}
