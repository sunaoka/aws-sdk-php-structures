<?php

namespace Sunaoka\Aws\Structures\SSMIncidents\UpdateDeletionProtection;

trait UpdateDeletionProtectionTrait
{
    /**
     * @param UpdateDeletionProtectionRequest $args
     * @return UpdateDeletionProtectionResponse
     */
    public function updateDeletionProtection(UpdateDeletionProtectionRequest $args)
    {
        $result = parent::updateDeletionProtection($args->toArray());
        return new UpdateDeletionProtectionResponse($result->toArray());
    }
}
