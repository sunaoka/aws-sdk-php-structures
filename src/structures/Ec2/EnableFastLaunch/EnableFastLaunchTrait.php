<?php

namespace Sunaoka\Aws\Structures\Ec2\EnableFastLaunch;

trait EnableFastLaunchTrait
{
    /**
     * @param EnableFastLaunchRequest $args
     * @return EnableFastLaunchResponse
     */
    public function enableFastLaunch(EnableFastLaunchRequest $args)
    {
        $result = parent::enableFastLaunch($args->toArray());
        return new EnableFastLaunchResponse($result->toArray());
    }
}
