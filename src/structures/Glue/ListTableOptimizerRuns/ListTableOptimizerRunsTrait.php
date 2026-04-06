<?php

namespace Sunaoka\Aws\Structures\Glue\ListTableOptimizerRuns;

trait ListTableOptimizerRunsTrait
{
    /**
     * @param ListTableOptimizerRunsRequest $args
     * @return ListTableOptimizerRunsResponse
     */
    public function listTableOptimizerRuns(ListTableOptimizerRunsRequest $args)
    {
        $result = parent::listTableOptimizerRuns($args->toArray());
        return new ListTableOptimizerRunsResponse($result->toArray());
    }
}
