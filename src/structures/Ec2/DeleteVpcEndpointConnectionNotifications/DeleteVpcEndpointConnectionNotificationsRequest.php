<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteVpcEndpointConnectionNotifications;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property list<string> $ConnectionNotificationIds
 */
class DeleteVpcEndpointConnectionNotificationsRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     ConnectionNotificationIds: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
