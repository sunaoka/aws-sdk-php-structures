<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\UpdateActiveModelVersion;

trait UpdateActiveModelVersionTrait
{
    /**
     * @param UpdateActiveModelVersionRequest $args
     * @return UpdateActiveModelVersionResponse
     */
    public function updateActiveModelVersion(UpdateActiveModelVersionRequest $args)
    {
        $result = parent::updateActiveModelVersion($args->toArray());
        return new UpdateActiveModelVersionResponse($result->toArray());
    }
}
