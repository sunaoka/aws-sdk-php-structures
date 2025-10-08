<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ListImagePipelines;

trait ListImagePipelinesTrait
{
    /**
     * @param ListImagePipelinesRequest $args
     * @return ListImagePipelinesResponse
     */
    public function listImagePipelines(ListImagePipelinesRequest $args)
    {
        $result = parent::listImagePipelines($args->toArray());
        return new ListImagePipelinesResponse($result->toArray());
    }
}
