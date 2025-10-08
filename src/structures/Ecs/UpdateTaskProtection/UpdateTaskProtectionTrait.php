<?php

namespace Sunaoka\Aws\Structures\Ecs\UpdateTaskProtection;

trait UpdateTaskProtectionTrait
{
    /**
     * @param UpdateTaskProtectionRequest $args
     * @return UpdateTaskProtectionResponse
     */
    public function updateTaskProtection(UpdateTaskProtectionRequest $args)
    {
        $result = parent::updateTaskProtection($args->toArray());
        return new UpdateTaskProtectionResponse($result->toArray());
    }
}
