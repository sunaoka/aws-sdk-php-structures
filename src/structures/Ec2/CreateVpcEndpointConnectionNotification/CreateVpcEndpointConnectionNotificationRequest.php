<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateVpcEndpointConnectionNotification;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property string|null $ServiceId
 * @property string|null $VpcEndpointId
 * @property string $ConnectionNotificationArn
 * @property list<string> $ConnectionEvents
 * @property string|null $ClientToken
 */
class CreateVpcEndpointConnectionNotificationRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     ServiceId?: string|null,
     *     VpcEndpointId?: string|null,
     *     ConnectionNotificationArn: string,
     *     ConnectionEvents: list<string>,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
