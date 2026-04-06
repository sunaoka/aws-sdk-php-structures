<?php

namespace Sunaoka\Aws\Structures\Connect\CreatePushNotificationRegistration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string|null $ClientToken
 * @property string $PinpointAppArn
 * @property string $DeviceToken
 * @property 'GCM'|'APNS'|'APNS_SANDBOX' $DeviceType
 * @property Shapes\ContactConfiguration $ContactConfiguration
 */
class CreatePushNotificationRegistrationRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     ClientToken?: string|null,
     *     PinpointAppArn: string,
     *     DeviceToken: string,
     *     DeviceType: 'GCM'|'APNS'|'APNS_SANDBOX',
     *     ContactConfiguration: Shapes\ContactConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
