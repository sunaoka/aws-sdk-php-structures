<?php

namespace Sunaoka\Aws\Structures\CodePipeline\ListPipelineExecutions;

trait ListPipelineExecutionsTrait
{
    /**
     * @param ListPipelineExecutionsRequest $args
     * @return ListPipelineExecutionsResponse
     */
    public function listPipelineExecutions(ListPipelineExecutionsRequest $args)
    {
        $result = parent::listPipelineExecutions($args->toArray());
        return new ListPipelineExecutionsResponse($result->toArray());
    }
}
