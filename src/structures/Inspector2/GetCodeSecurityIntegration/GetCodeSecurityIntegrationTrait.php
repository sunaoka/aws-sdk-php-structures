<?php

namespace Sunaoka\Aws\Structures\Inspector2\GetCodeSecurityIntegration;

trait GetCodeSecurityIntegrationTrait
{
    /**
     * @param GetCodeSecurityIntegrationRequest $args
     * @return GetCodeSecurityIntegrationResponse
     */
    public function getCodeSecurityIntegration(GetCodeSecurityIntegrationRequest $args)
    {
        $result = parent::getCodeSecurityIntegration($args->toArray());
        return new GetCodeSecurityIntegrationResponse($result->toArray());
    }
}
