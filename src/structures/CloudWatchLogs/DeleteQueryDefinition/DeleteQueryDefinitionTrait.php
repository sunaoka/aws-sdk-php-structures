<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DeleteQueryDefinition;

trait DeleteQueryDefinitionTrait
{
    /**
     * @param DeleteQueryDefinitionRequest $args
     * @return DeleteQueryDefinitionResponse
     */
    public function deleteQueryDefinition(DeleteQueryDefinitionRequest $args)
    {
        $result = parent::deleteQueryDefinition($args->toArray());
        return new DeleteQueryDefinitionResponse($result->toArray());
    }
}
