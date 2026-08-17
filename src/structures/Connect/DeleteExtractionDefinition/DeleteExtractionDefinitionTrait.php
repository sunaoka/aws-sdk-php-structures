<?php

namespace Sunaoka\Aws\Structures\Connect\DeleteExtractionDefinition;

trait DeleteExtractionDefinitionTrait
{
    /**
     * @param DeleteExtractionDefinitionRequest $args
     * @return DeleteExtractionDefinitionResponse
     */
    public function deleteExtractionDefinition(DeleteExtractionDefinitionRequest $args)
    {
        $result = parent::deleteExtractionDefinition($args->toArray());
        return new DeleteExtractionDefinitionResponse($result->toArray());
    }
}
