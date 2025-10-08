<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\ListModelVersions;

trait ListModelVersionsTrait
{
    /**
     * @param ListModelVersionsRequest $args
     * @return ListModelVersionsResponse
     */
    public function listModelVersions(ListModelVersionsRequest $args)
    {
        $result = parent::listModelVersions($args->toArray());
        return new ListModelVersionsResponse($result->toArray());
    }
}
