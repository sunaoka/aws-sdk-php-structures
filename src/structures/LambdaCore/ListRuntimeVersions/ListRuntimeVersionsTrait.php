<?php

namespace Sunaoka\Aws\Structures\LambdaCore\ListRuntimeVersions;

trait ListRuntimeVersionsTrait
{
    /**
     * @param ListRuntimeVersionsRequest $args
     * @return ListRuntimeVersionsResponse
     */
    public function listRuntimeVersions(ListRuntimeVersionsRequest $args)
    {
        $result = parent::listRuntimeVersions($args->toArray());
        return new ListRuntimeVersionsResponse($result->toArray());
    }
}
