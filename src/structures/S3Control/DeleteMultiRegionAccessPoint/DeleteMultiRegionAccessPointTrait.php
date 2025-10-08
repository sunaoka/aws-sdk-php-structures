<?php

namespace Sunaoka\Aws\Structures\S3Control\DeleteMultiRegionAccessPoint;

trait DeleteMultiRegionAccessPointTrait
{
    /**
     * @param DeleteMultiRegionAccessPointRequest $args
     * @return DeleteMultiRegionAccessPointResponse
     */
    public function deleteMultiRegionAccessPoint(DeleteMultiRegionAccessPointRequest $args)
    {
        $result = parent::deleteMultiRegionAccessPoint($args->toArray());
        return new DeleteMultiRegionAccessPointResponse($result->toArray());
    }
}
