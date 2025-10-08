<?php

namespace Sunaoka\Aws\Structures\CodeBuild\RetryBuild;

trait RetryBuildTrait
{
    /**
     * @param RetryBuildRequest $args
     * @return RetryBuildResponse
     */
    public function retryBuild(RetryBuildRequest $args)
    {
        $result = parent::retryBuild($args->toArray());
        return new RetryBuildResponse($result->toArray());
    }
}
