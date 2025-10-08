<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyVpcEndpointConnectionNotification;

trait ModifyVpcEndpointConnectionNotificationTrait
{
    /**
     * @param ModifyVpcEndpointConnectionNotificationRequest $args
     * @return ModifyVpcEndpointConnectionNotificationResponse
     */
    public function modifyVpcEndpointConnectionNotification(ModifyVpcEndpointConnectionNotificationRequest $args)
    {
        $result = parent::modifyVpcEndpointConnectionNotification($args->toArray());
        return new ModifyVpcEndpointConnectionNotificationResponse($result->toArray());
    }
}
