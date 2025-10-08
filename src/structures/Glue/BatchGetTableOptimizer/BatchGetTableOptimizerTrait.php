<?php

namespace Sunaoka\Aws\Structures\Glue\BatchGetTableOptimizer;

trait BatchGetTableOptimizerTrait
{
    /**
     * @param BatchGetTableOptimizerRequest $args
     * @return BatchGetTableOptimizerResponse
     */
    public function batchGetTableOptimizer(BatchGetTableOptimizerRequest $args)
    {
        $result = parent::batchGetTableOptimizer($args->toArray());
        return new BatchGetTableOptimizerResponse($result->toArray());
    }
}
