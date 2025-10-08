<?php

namespace Sunaoka\Aws\Structures\Ec2\ReportInstanceStatus;

trait ReportInstanceStatusTrait
{
    /**
     * @param ReportInstanceStatusRequest $args
     * @return void
     */
    public function reportInstanceStatus(ReportInstanceStatusRequest $args)
    {
        parent::reportInstanceStatus($args->toArray());
    }
}
