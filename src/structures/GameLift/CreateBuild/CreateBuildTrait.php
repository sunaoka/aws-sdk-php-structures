<?php

namespace Sunaoka\Aws\Structures\GameLift\CreateBuild;

trait CreateBuildTrait
{
    /**
     * @param CreateBuildRequest $args
     * @return CreateBuildResponse
     */
    public function createBuild(CreateBuildRequest $args)
    {
        $result = parent::createBuild($args->toArray());
        return new CreateBuildResponse($result->toArray());
    }
}
