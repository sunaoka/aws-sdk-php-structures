<?php

namespace Sunaoka\Aws\Structures\AppSync\StartSchemaCreation;

trait StartSchemaCreationTrait
{
    /**
     * @param StartSchemaCreationRequest $args
     * @return StartSchemaCreationResponse
     */
    public function startSchemaCreation(StartSchemaCreationRequest $args)
    {
        $result = parent::startSchemaCreation($args->toArray());
        return new StartSchemaCreationResponse($result->toArray());
    }
}
