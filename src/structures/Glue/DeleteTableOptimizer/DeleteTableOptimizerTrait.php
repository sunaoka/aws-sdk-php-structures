<?php

namespace Sunaoka\Aws\Structures\Glue\DeleteTableOptimizer;

trait DeleteTableOptimizerTrait
{
    /**
     * @param DeleteTableOptimizerRequest $args
     * @return DeleteTableOptimizerResponse
     */
    public function deleteTableOptimizer(DeleteTableOptimizerRequest $args)
    {
        $result = parent::deleteTableOptimizer($args->toArray());
        return new DeleteTableOptimizerResponse($result->toArray());
    }
}
