<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteVpcEndpointConnectionNotifications;

trait DeleteVpcEndpointConnectionNotificationsTrait
{
    /**
     * @param DeleteVpcEndpointConnectionNotificationsRequest $args
     * @return DeleteVpcEndpointConnectionNotificationsResponse
     */
    public function deleteVpcEndpointConnectionNotifications(DeleteVpcEndpointConnectionNotificationsRequest $args)
    {
        $result = parent::deleteVpcEndpointConnectionNotifications($args->toArray());
        return new DeleteVpcEndpointConnectionNotificationsResponse($result->toArray());
    }
}
