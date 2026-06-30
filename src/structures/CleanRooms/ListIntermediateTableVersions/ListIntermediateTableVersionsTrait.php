<?php

namespace Sunaoka\Aws\Structures\CleanRooms\ListIntermediateTableVersions;

trait ListIntermediateTableVersionsTrait
{
    /**
     * @param ListIntermediateTableVersionsRequest $args
     * @return ListIntermediateTableVersionsResponse
     */
    public function listIntermediateTableVersions(ListIntermediateTableVersionsRequest $args)
    {
        $result = parent::listIntermediateTableVersions($args->toArray());
        return new ListIntermediateTableVersionsResponse($result->toArray());
    }
}
