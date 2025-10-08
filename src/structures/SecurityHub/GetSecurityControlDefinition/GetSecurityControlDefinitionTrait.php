<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetSecurityControlDefinition;

trait GetSecurityControlDefinitionTrait
{
    /**
     * @param GetSecurityControlDefinitionRequest $args
     * @return GetSecurityControlDefinitionResponse
     */
    public function getSecurityControlDefinition(GetSecurityControlDefinitionRequest $args)
    {
        $result = parent::getSecurityControlDefinition($args->toArray());
        return new GetSecurityControlDefinitionResponse($result->toArray());
    }
}
