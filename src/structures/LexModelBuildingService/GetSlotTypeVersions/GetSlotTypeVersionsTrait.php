<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\GetSlotTypeVersions;

trait GetSlotTypeVersionsTrait
{
    /**
     * @param GetSlotTypeVersionsRequest $args
     * @return GetSlotTypeVersionsResponse
     */
    public function getSlotTypeVersions(GetSlotTypeVersionsRequest $args)
    {
        $result = parent::getSlotTypeVersions($args->toArray());
        return new GetSlotTypeVersionsResponse($result->toArray());
    }
}
