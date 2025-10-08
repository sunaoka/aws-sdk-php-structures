<?php

namespace Sunaoka\Aws\Structures\Glue\GetTableOptimizer;

trait GetTableOptimizerTrait
{
    /**
     * @param GetTableOptimizerRequest $args
     * @return GetTableOptimizerResponse
     */
    public function getTableOptimizer(GetTableOptimizerRequest $args)
    {
        $result = parent::getTableOptimizer($args->toArray());
        return new GetTableOptimizerResponse($result->toArray());
    }
}
