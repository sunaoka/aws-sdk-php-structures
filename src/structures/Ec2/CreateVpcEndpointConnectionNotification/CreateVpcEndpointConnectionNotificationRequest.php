<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateVpcEndpointConnectionNotification;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property string $ServiceId
 * @property string $VpcEndpointId
 * @property string $ConnectionNotificationArn
 * @property list<string> $ConnectionEvents
 * @property string $ClientToken
 */
class CreateVpcEndpointConnectionNotificationRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     ServiceId?: string,
     *     VpcEndpointId?: string,
     *     ConnectionNotificationArn: string,
     *     ConnectionEvents: list<string>,
     *     ClientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
