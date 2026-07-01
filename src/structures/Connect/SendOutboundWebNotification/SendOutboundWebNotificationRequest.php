<?php

namespace Sunaoka\Aws\Structures\Connect\SendOutboundWebNotification;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string|null $ClientToken
 * @property string $BrowserId
 * @property string $SessionId
 * @property \Aws\Api\DateTimeResult $ExpiresAt
 * @property Shapes\WebNotificationSource $Source
 * @property Shapes\WidgetDestination $Destination
 * @property Shapes\WebNotificationContent $Content
 */
class SendOutboundWebNotificationRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     ClientToken?: string|null,
     *     BrowserId: string,
     *     SessionId: string,
     *     ExpiresAt: \Aws\Api\DateTimeResult,
     *     Source: Shapes\WebNotificationSource,
     *     Destination: Shapes\WidgetDestination,
     *     Content: Shapes\WebNotificationContent
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
