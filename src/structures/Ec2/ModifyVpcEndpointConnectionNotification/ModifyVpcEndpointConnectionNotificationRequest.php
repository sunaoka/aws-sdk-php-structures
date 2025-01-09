<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyVpcEndpointConnectionNotification;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property string $ConnectionNotificationId
 * @property string $ConnectionNotificationArn
 * @property list<string> $ConnectionEvents
 */
class ModifyVpcEndpointConnectionNotificationRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     ConnectionNotificationId: string,
     *     ConnectionNotificationArn?: string,
     *     ConnectionEvents?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
