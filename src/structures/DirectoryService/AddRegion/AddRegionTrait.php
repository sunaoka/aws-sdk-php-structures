<?php

namespace Sunaoka\Aws\Structures\DirectoryService\AddRegion;

trait AddRegionTrait
{
    /**
     * @param AddRegionRequest $args
     * @return AddRegionResponse
     */
    public function addRegion(AddRegionRequest $args)
    {
        $result = parent::addRegion($args->toArray());
        return new AddRegionResponse($result->toArray());
    }
}
