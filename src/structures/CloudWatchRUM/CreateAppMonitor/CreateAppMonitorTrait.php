<?php

namespace Sunaoka\Aws\Structures\CloudWatchRUM\CreateAppMonitor;

trait CreateAppMonitorTrait
{
    /**
     * @param CreateAppMonitorRequest $args
     * @return CreateAppMonitorResponse
     */
    public function createAppMonitor(CreateAppMonitorRequest $args)
    {
        $result = parent::createAppMonitor($args->toArray());
        return new CreateAppMonitorResponse($result->toArray());
    }
}
