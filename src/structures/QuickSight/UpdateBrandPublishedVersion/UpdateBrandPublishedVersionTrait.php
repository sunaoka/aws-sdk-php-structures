<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateBrandPublishedVersion;

trait UpdateBrandPublishedVersionTrait
{
    /**
     * @param UpdateBrandPublishedVersionRequest $args
     * @return UpdateBrandPublishedVersionResponse
     */
    public function updateBrandPublishedVersion(UpdateBrandPublishedVersionRequest $args)
    {
        $result = parent::updateBrandPublishedVersion($args->toArray());
        return new UpdateBrandPublishedVersionResponse($result->toArray());
    }
}
