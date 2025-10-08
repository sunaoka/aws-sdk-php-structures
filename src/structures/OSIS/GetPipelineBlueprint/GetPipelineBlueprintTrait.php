<?php

namespace Sunaoka\Aws\Structures\OSIS\GetPipelineBlueprint;

trait GetPipelineBlueprintTrait
{
    /**
     * @param GetPipelineBlueprintRequest $args
     * @return GetPipelineBlueprintResponse
     */
    public function getPipelineBlueprint(GetPipelineBlueprintRequest $args)
    {
        $result = parent::getPipelineBlueprint($args->toArray());
        return new GetPipelineBlueprintResponse($result->toArray());
    }
}
