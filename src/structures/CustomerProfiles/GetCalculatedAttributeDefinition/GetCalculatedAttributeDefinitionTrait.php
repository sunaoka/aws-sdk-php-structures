<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetCalculatedAttributeDefinition;

trait GetCalculatedAttributeDefinitionTrait
{
    /**
     * @param GetCalculatedAttributeDefinitionRequest $args
     * @return GetCalculatedAttributeDefinitionResponse
     */
    public function getCalculatedAttributeDefinition(GetCalculatedAttributeDefinitionRequest $args)
    {
        $result = parent::getCalculatedAttributeDefinition($args->toArray());
        return new GetCalculatedAttributeDefinitionResponse($result->toArray());
    }
}
