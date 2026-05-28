<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\UpdateSystem;

trait UpdateSystemTrait
{
    /**
     * @param UpdateSystemRequest $args
     * @return UpdateSystemResponse
     */
    public function updateSystem(UpdateSystemRequest $args)
    {
        $result = parent::updateSystem($args->toArray());
        return new UpdateSystemResponse($result->toArray());
    }
}
