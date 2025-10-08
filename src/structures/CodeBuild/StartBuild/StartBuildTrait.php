<?php

namespace Sunaoka\Aws\Structures\CodeBuild\StartBuild;

trait StartBuildTrait
{
    /**
     * @param StartBuildRequest $args
     * @return StartBuildResponse
     */
    public function startBuild(StartBuildRequest $args)
    {
        $result = parent::startBuild($args->toArray());
        return new StartBuildResponse($result->toArray());
    }
}
