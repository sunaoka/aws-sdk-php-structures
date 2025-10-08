<?php

namespace Sunaoka\Aws\Structures\Ec2\DeregisterInstanceEventNotificationAttributes;

trait DeregisterInstanceEventNotificationAttributesTrait
{
    /**
     * @param DeregisterInstanceEventNotificationAttributesRequest $args
     * @return DeregisterInstanceEventNotificationAttributesResponse
     */
    public function deregisterInstanceEventNotificationAttributes(DeregisterInstanceEventNotificationAttributesRequest $args)
    {
        $result = parent::deregisterInstanceEventNotificationAttributes($args->toArray());
        return new DeregisterInstanceEventNotificationAttributesResponse($result->toArray());
    }
}
