<?php

namespace Sunaoka\Aws\Structures\Ec2\GetCapacityManagerMonitoredTagKeys;

trait GetCapacityManagerMonitoredTagKeysTrait
{
    /**
     * @param GetCapacityManagerMonitoredTagKeysRequest $args
     * @return GetCapacityManagerMonitoredTagKeysResponse
     */
    public function getCapacityManagerMonitoredTagKeys(GetCapacityManagerMonitoredTagKeysRequest $args)
    {
        $result = parent::getCapacityManagerMonitoredTagKeys($args->toArray());
        return new GetCapacityManagerMonitoredTagKeysResponse($result->toArray());
    }
}
