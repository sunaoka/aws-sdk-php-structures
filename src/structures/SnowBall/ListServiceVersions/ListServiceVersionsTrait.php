<?php

namespace Sunaoka\Aws\Structures\SnowBall\ListServiceVersions;

trait ListServiceVersionsTrait
{
    /**
     * @param ListServiceVersionsRequest $args
     * @return ListServiceVersionsResponse
     */
    public function listServiceVersions(ListServiceVersionsRequest $args)
    {
        $result = parent::listServiceVersions($args->toArray());
        return new ListServiceVersionsResponse($result->toArray());
    }
}
