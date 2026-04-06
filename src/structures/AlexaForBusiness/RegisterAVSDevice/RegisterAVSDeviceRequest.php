<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\RegisterAVSDevice;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientId
 * @property string $UserCode
 * @property string $ProductId
 * @property string|null $DeviceSerialNumber
 * @property string $AmazonId
 * @property string|null $RoomArn
 * @property list<Shapes\Tag>|null $Tags
 */
class RegisterAVSDeviceRequest extends Request
{
    /**
     * @param array{
     *     ClientId: string,
     *     UserCode: string,
     *     ProductId: string,
     *     DeviceSerialNumber?: string|null,
     *     AmazonId: string,
     *     RoomArn?: string|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
