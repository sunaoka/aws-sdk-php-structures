<?php

namespace Sunaoka\Aws\Structures\Ec2\DisableFastLaunch;

trait DisableFastLaunchTrait
{
    /**
     * @param DisableFastLaunchRequest $args
     * @return DisableFastLaunchResponse
     */
    public function disableFastLaunch(DisableFastLaunchRequest $args)
    {
        $result = parent::disableFastLaunch($args->toArray());
        return new DisableFastLaunchResponse($result->toArray());
    }
}
