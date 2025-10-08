<?php

namespace Sunaoka\Aws\Structures\AutoScaling\ResumeProcesses;

trait ResumeProcessesTrait
{
    /**
     * @param ResumeProcessesRequest $args
     * @return void
     */
    public function resumeProcesses(ResumeProcessesRequest $args)
    {
        parent::resumeProcesses($args->toArray());
    }
}
