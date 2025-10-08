<?php

namespace Sunaoka\Aws\Structures\Athena\ListExecutors;

trait ListExecutorsTrait
{
    /**
     * @param ListExecutorsRequest $args
     * @return ListExecutorsResponse
     */
    public function listExecutors(ListExecutorsRequest $args)
    {
        $result = parent::listExecutors($args->toArray());
        return new ListExecutorsResponse($result->toArray());
    }
}
