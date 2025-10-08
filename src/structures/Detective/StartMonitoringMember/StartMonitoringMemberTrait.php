<?php

namespace Sunaoka\Aws\Structures\Detective\StartMonitoringMember;

trait StartMonitoringMemberTrait
{
    /**
     * @param StartMonitoringMemberRequest $args
     * @return void
     */
    public function startMonitoringMember(StartMonitoringMemberRequest $args)
    {
        parent::startMonitoringMember($args->toArray());
    }
}
