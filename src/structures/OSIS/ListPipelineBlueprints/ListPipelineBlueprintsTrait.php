<?php

namespace Sunaoka\Aws\Structures\OSIS\ListPipelineBlueprints;

trait ListPipelineBlueprintsTrait
{
    /**
     * @param ListPipelineBlueprintsRequest $args
     * @return ListPipelineBlueprintsResponse
     */
    public function listPipelineBlueprints(ListPipelineBlueprintsRequest $args)
    {
        $result = parent::listPipelineBlueprints($args->toArray());
        return new ListPipelineBlueprintsResponse($result->toArray());
    }
}
