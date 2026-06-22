<?php

namespace Sunaoka\Aws\Structures\LambdaMicrovms\ListManagedMicrovmImageVersions;

trait ListManagedMicrovmImageVersionsTrait
{
    /**
     * @param ListManagedMicrovmImageVersionsRequest $args
     * @return ListManagedMicrovmImageVersionsResponse
     */
    public function listManagedMicrovmImageVersions(ListManagedMicrovmImageVersionsRequest $args)
    {
        $result = parent::listManagedMicrovmImageVersions($args->toArray());
        return new ListManagedMicrovmImageVersionsResponse($result->toArray());
    }
}
