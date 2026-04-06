<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\StartDeviceSync;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $RoomArn
 * @property string|null $DeviceArn
 * @property list<'BLUETOOTH'|'VOLUME'|'NOTIFICATIONS'|'LISTS'|'SKILLS'|'NETWORK_PROFILE'|'SETTINGS'|'ALL'> $Features
 */
class StartDeviceSyncRequest extends Request
{
    /**
     * @param array{
     *     RoomArn?: string|null,
     *     DeviceArn?: string|null,
     *     Features: list<'BLUETOOTH'|'VOLUME'|'NOTIFICATIONS'|'LISTS'|'SKILLS'|'NETWORK_PROFILE'|'SETTINGS'|'ALL'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
