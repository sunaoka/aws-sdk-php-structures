<?php

namespace Sunaoka\Aws\Structures\Synthetics\StartCanaryDryRun;

trait StartCanaryDryRunTrait
{
    /**
     * @param StartCanaryDryRunRequest $args
     * @return StartCanaryDryRunResponse
     */
    public function startCanaryDryRun(StartCanaryDryRunRequest $args)
    {
        $result = parent::startCanaryDryRun($args->toArray());
        return new StartCanaryDryRunResponse($result->toArray());
    }
}
