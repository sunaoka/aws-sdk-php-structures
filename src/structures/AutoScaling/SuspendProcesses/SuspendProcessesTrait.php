<?php

namespace Sunaoka\Aws\Structures\AutoScaling\SuspendProcesses;

trait SuspendProcessesTrait
{
    /**
     * @param SuspendProcessesRequest $args
     * @return void
     */
    public function suspendProcesses(SuspendProcessesRequest $args)
    {
        parent::suspendProcesses($args->toArray());
    }
}
