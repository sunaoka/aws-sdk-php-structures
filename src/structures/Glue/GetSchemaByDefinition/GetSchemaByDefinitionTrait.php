<?php

namespace Sunaoka\Aws\Structures\Glue\GetSchemaByDefinition;

trait GetSchemaByDefinitionTrait
{
    /**
     * @param GetSchemaByDefinitionRequest $args
     * @return GetSchemaByDefinitionResponse
     */
    public function getSchemaByDefinition(GetSchemaByDefinitionRequest $args)
    {
        $result = parent::getSchemaByDefinition($args->toArray());
        return new GetSchemaByDefinitionResponse($result->toArray());
    }
}
