<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListPipelineVersions;

trait ListPipelineVersionsTrait
{
    /**
     * @param ListPipelineVersionsRequest $args
     * @return ListPipelineVersionsResponse
     */
    public function listPipelineVersions(ListPipelineVersionsRequest $args)
    {
        $result = parent::listPipelineVersions($args->toArray());
        return new ListPipelineVersionsResponse($result->toArray());
    }
}
