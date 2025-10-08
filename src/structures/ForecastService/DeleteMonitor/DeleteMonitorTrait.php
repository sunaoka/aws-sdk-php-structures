<?php

namespace Sunaoka\Aws\Structures\ForecastService\DeleteMonitor;

trait DeleteMonitorTrait
{
    /**
     * @param DeleteMonitorRequest $args
     * @return void
     */
    public function deleteMonitor(DeleteMonitorRequest $args)
    {
        parent::deleteMonitor($args->toArray());
    }
}
