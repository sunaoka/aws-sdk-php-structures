<?php

namespace Sunaoka\Aws\Structures\GameLift\UpdateBuild;

trait UpdateBuildTrait
{
    /**
     * @param UpdateBuildRequest $args
     * @return UpdateBuildResponse
     */
    public function updateBuild(UpdateBuildRequest $args)
    {
        $result = parent::updateBuild($args->toArray());
        return new UpdateBuildResponse($result->toArray());
    }
}
