<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateVpcEndpointConnectionNotification;

trait CreateVpcEndpointConnectionNotificationTrait
{
    /**
     * @param CreateVpcEndpointConnectionNotificationRequest $args
     * @return CreateVpcEndpointConnectionNotificationResponse
     */
    public function createVpcEndpointConnectionNotification(CreateVpcEndpointConnectionNotificationRequest $args)
    {
        $result = parent::createVpcEndpointConnectionNotification($args->toArray());
        return new CreateVpcEndpointConnectionNotificationResponse($result->toArray());
    }
}
