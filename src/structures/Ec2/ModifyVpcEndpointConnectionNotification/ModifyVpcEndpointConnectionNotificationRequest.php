<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyVpcEndpointConnectionNotification;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property string $ConnectionNotificationId
 * @property string|null $ConnectionNotificationArn
 * @property list<string>|null $ConnectionEvents
 */
class ModifyVpcEndpointConnectionNotificationRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     ConnectionNotificationId: string,
     *     ConnectionNotificationArn?: string|null,
     *     ConnectionEvents?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
