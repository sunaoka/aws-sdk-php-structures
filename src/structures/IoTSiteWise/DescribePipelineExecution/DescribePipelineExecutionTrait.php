<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribePipelineExecution;

trait DescribePipelineExecutionTrait
{
    /**
     * @param DescribePipelineExecutionRequest $args
     * @return DescribePipelineExecutionResponse
     */
    public function describePipelineExecution(DescribePipelineExecutionRequest $args)
    {
        $result = parent::describePipelineExecution($args->toArray());
        return new DescribePipelineExecutionResponse($result->toArray());
    }
}
