<?php

namespace Sunaoka\Aws\Structures\Connect\CreateExtractionDefinition;

trait CreateExtractionDefinitionTrait
{
    /**
     * @param CreateExtractionDefinitionRequest $args
     * @return CreateExtractionDefinitionResponse
     */
    public function createExtractionDefinition(CreateExtractionDefinitionRequest $args)
    {
        $result = parent::createExtractionDefinition($args->toArray());
        return new CreateExtractionDefinitionResponse($result->toArray());
    }
}
