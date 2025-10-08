<?php

namespace Sunaoka\Aws\Structures\GameLiftStreams\UpdateApplication;

trait UpdateApplicationTrait
{
    /**
     * @param UpdateApplicationRequest $args
     * @return UpdateApplicationResponse
     */
    public function updateApplication(UpdateApplicationRequest $args)
    {
        $result = parent::updateApplication($args->toArray());
        return new UpdateApplicationResponse($result->toArray());
    }
}
