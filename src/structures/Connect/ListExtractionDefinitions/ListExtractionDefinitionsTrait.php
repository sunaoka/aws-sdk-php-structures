<?php

namespace Sunaoka\Aws\Structures\Connect\ListExtractionDefinitions;

trait ListExtractionDefinitionsTrait
{
    /**
     * @param ListExtractionDefinitionsRequest $args
     * @return ListExtractionDefinitionsResponse
     */
    public function listExtractionDefinitions(ListExtractionDefinitionsRequest $args)
    {
        $result = parent::listExtractionDefinitions($args->toArray());
        return new ListExtractionDefinitionsResponse($result->toArray());
    }
}
