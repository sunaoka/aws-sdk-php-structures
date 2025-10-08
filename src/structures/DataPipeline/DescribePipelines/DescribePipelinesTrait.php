<?php

namespace Sunaoka\Aws\Structures\DataPipeline\DescribePipelines;

trait DescribePipelinesTrait
{
    /**
     * @param DescribePipelinesRequest $args
     * @return DescribePipelinesResponse
     */
    public function describePipelines(DescribePipelinesRequest $args)
    {
        $result = parent::describePipelines($args->toArray());
        return new DescribePipelinesResponse($result->toArray());
    }
}
