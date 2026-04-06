<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\ListSegmentDefinitions;

trait ListSegmentDefinitionsTrait
{
    /**
     * @param ListSegmentDefinitionsRequest $args
     * @return ListSegmentDefinitionsResponse
     */
    public function listSegmentDefinitions(ListSegmentDefinitionsRequest $args)
    {
        $result = parent::listSegmentDefinitions($args->toArray());
        return new ListSegmentDefinitionsResponse($result->toArray());
    }
}
