<?php

namespace Sunaoka\Aws\Structures\Glue\CreateTableOptimizer;

trait CreateTableOptimizerTrait
{
    /**
     * @param CreateTableOptimizerRequest $args
     * @return CreateTableOptimizerResponse
     */
    public function createTableOptimizer(CreateTableOptimizerRequest $args)
    {
        $result = parent::createTableOptimizer($args->toArray());
        return new CreateTableOptimizerResponse($result->toArray());
    }
}
