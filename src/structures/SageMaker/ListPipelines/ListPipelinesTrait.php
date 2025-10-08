<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListPipelines;

trait ListPipelinesTrait
{
    /**
     * @param ListPipelinesRequest $args
     * @return ListPipelinesResponse
     */
    public function listPipelines(ListPipelinesRequest $args)
    {
        $result = parent::listPipelines($args->toArray());
        return new ListPipelinesResponse($result->toArray());
    }
}
