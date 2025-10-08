<?php

namespace Sunaoka\Aws\Structures\DirectoryService\UpdateRadius;

trait UpdateRadiusTrait
{
    /**
     * @param UpdateRadiusRequest $args
     * @return UpdateRadiusResponse
     */
    public function updateRadius(UpdateRadiusRequest $args)
    {
        $result = parent::updateRadius($args->toArray());
        return new UpdateRadiusResponse($result->toArray());
    }
}
