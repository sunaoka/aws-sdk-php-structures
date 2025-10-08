<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateTableOptimizer;

trait UpdateTableOptimizerTrait
{
    /**
     * @param UpdateTableOptimizerRequest $args
     * @return UpdateTableOptimizerResponse
     */
    public function updateTableOptimizer(UpdateTableOptimizerRequest $args)
    {
        $result = parent::updateTableOptimizer($args->toArray());
        return new UpdateTableOptimizerResponse($result->toArray());
    }
}
