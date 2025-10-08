<?php

namespace Sunaoka\Aws\Structures\DataSync\UpdateLocationFsxOntap;

trait UpdateLocationFsxOntapTrait
{
    /**
     * @param UpdateLocationFsxOntapRequest $args
     * @return UpdateLocationFsxOntapResponse
     */
    public function updateLocationFsxOntap(UpdateLocationFsxOntapRequest $args)
    {
        $result = parent::updateLocationFsxOntap($args->toArray());
        return new UpdateLocationFsxOntapResponse($result->toArray());
    }
}
