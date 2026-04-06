<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetSegmentDefinition;

trait GetSegmentDefinitionTrait
{
    /**
     * @param GetSegmentDefinitionRequest $args
     * @return GetSegmentDefinitionResponse
     */
    public function getSegmentDefinition(GetSegmentDefinitionRequest $args)
    {
        $result = parent::getSegmentDefinition($args->toArray());
        return new GetSegmentDefinitionResponse($result->toArray());
    }
}
