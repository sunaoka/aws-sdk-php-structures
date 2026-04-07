<?php

namespace Sunaoka\Aws\Structures\Ec2\UpdateCapacityManagerMonitoredTagKeys;

trait UpdateCapacityManagerMonitoredTagKeysTrait
{
    /**
     * @param UpdateCapacityManagerMonitoredTagKeysRequest $args
     * @return UpdateCapacityManagerMonitoredTagKeysResponse
     */
    public function updateCapacityManagerMonitoredTagKeys(UpdateCapacityManagerMonitoredTagKeysRequest $args)
    {
        $result = parent::updateCapacityManagerMonitoredTagKeys($args->toArray());
        return new UpdateCapacityManagerMonitoredTagKeysResponse($result->toArray());
    }
}
