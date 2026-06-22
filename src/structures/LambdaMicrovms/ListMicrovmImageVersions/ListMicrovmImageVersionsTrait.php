<?php

namespace Sunaoka\Aws\Structures\LambdaMicrovms\ListMicrovmImageVersions;

trait ListMicrovmImageVersionsTrait
{
    /**
     * @param ListMicrovmImageVersionsRequest $args
     * @return ListMicrovmImageVersionsResponse
     */
    public function listMicrovmImageVersions(ListMicrovmImageVersionsRequest $args)
    {
        $result = parent::listMicrovmImageVersions($args->toArray());
        return new ListMicrovmImageVersionsResponse($result->toArray());
    }
}
