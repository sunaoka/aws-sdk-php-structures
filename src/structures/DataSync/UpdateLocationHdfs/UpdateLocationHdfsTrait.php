<?php

namespace Sunaoka\Aws\Structures\DataSync\UpdateLocationHdfs;

trait UpdateLocationHdfsTrait
{
    /**
     * @param UpdateLocationHdfsRequest $args
     * @return UpdateLocationHdfsResponse
     */
    public function updateLocationHdfs(UpdateLocationHdfsRequest $args)
    {
        $result = parent::updateLocationHdfs($args->toArray());
        return new UpdateLocationHdfsResponse($result->toArray());
    }
}
