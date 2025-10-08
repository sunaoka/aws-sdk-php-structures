<?php

namespace Sunaoka\Aws\Structures\Pipes\ListPipes;

trait ListPipesTrait
{
    /**
     * @param ListPipesRequest $args
     * @return ListPipesResponse
     */
    public function listPipes(ListPipesRequest $args)
    {
        $result = parent::listPipes($args->toArray());
        return new ListPipesResponse($result->toArray());
    }
}
