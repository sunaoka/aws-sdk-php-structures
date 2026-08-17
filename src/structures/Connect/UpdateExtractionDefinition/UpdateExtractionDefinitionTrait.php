<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateExtractionDefinition;

trait UpdateExtractionDefinitionTrait
{
    /**
     * @param UpdateExtractionDefinitionRequest $args
     * @return UpdateExtractionDefinitionResponse
     */
    public function updateExtractionDefinition(UpdateExtractionDefinitionRequest $args)
    {
        $result = parent::updateExtractionDefinition($args->toArray());
        return new UpdateExtractionDefinitionResponse($result->toArray());
    }
}
