<?php

namespace Sunaoka\Aws\Structures\LambdaCore\ListRuntimes;

trait ListRuntimesTrait
{
    /**
     * @param ListRuntimesRequest $args
     * @return ListRuntimesResponse
     */
    public function listRuntimes(ListRuntimesRequest $args)
    {
        $result = parent::listRuntimes($args->toArray());
        return new ListRuntimesResponse($result->toArray());
    }
}
