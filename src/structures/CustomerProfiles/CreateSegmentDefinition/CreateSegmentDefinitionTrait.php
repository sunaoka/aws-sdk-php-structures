<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\CreateSegmentDefinition;

trait CreateSegmentDefinitionTrait
{
    /**
     * @param CreateSegmentDefinitionRequest $args
     * @return CreateSegmentDefinitionResponse
     */
    public function createSegmentDefinition(CreateSegmentDefinitionRequest $args)
    {
        $result = parent::createSegmentDefinition($args->toArray());
        return new CreateSegmentDefinitionResponse($result->toArray());
    }
}
