<?php

namespace Sunaoka\Aws\Structures\InternetMonitor\CreateMonitor;

trait CreateMonitorTrait
{
    /**
     * @param CreateMonitorRequest $args
     * @return CreateMonitorResponse
     */
    public function createMonitor(CreateMonitorRequest $args)
    {
        $result = parent::createMonitor($args->toArray());
        return new CreateMonitorResponse($result->toArray());
    }
}
