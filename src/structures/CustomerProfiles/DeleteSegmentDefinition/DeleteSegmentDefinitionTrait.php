<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\DeleteSegmentDefinition;

trait DeleteSegmentDefinitionTrait
{
    /**
     * @param DeleteSegmentDefinitionRequest $args
     * @return DeleteSegmentDefinitionResponse
     */
    public function deleteSegmentDefinition(DeleteSegmentDefinitionRequest $args)
    {
        $result = parent::deleteSegmentDefinition($args->toArray());
        return new DeleteSegmentDefinitionResponse($result->toArray());
    }
}
