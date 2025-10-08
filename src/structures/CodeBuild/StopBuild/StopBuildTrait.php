<?php

namespace Sunaoka\Aws\Structures\CodeBuild\StopBuild;

trait StopBuildTrait
{
    /**
     * @param StopBuildRequest $args
     * @return StopBuildResponse
     */
    public function stopBuild(StopBuildRequest $args)
    {
        $result = parent::stopBuild($args->toArray());
        return new StopBuildResponse($result->toArray());
    }
}
