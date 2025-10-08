<?php

namespace Sunaoka\Aws\Structures\Ec2\RegisterInstanceEventNotificationAttributes;

trait RegisterInstanceEventNotificationAttributesTrait
{
    /**
     * @param RegisterInstanceEventNotificationAttributesRequest $args
     * @return RegisterInstanceEventNotificationAttributesResponse
     */
    public function registerInstanceEventNotificationAttributes(RegisterInstanceEventNotificationAttributesRequest $args)
    {
        $result = parent::registerInstanceEventNotificationAttributes($args->toArray());
        return new RegisterInstanceEventNotificationAttributesResponse($result->toArray());
    }
}
