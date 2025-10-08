<?php

namespace Sunaoka\Aws\Structures\DataSync\UpdateLocationFsxLustre;

trait UpdateLocationFsxLustreTrait
{
    /**
     * @param UpdateLocationFsxLustreRequest $args
     * @return UpdateLocationFsxLustreResponse
     */
    public function updateLocationFsxLustre(UpdateLocationFsxLustreRequest $args)
    {
        $result = parent::updateLocationFsxLustre($args->toArray());
        return new UpdateLocationFsxLustreResponse($result->toArray());
    }
}
