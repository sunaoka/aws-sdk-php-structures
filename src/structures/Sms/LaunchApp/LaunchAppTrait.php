<?php

namespace Sunaoka\Aws\Structures\Sms\LaunchApp;

trait LaunchAppTrait
{
    /**
     * @param LaunchAppRequest $args
     * @return LaunchAppResponse
     */
    public function launchApp(LaunchAppRequest $args)
    {
        $result = parent::launchApp($args->toArray());
        return new LaunchAppResponse($result->toArray());
    }
}
