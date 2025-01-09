<?php

namespace Sunaoka\Aws\Structures\NetworkManager\UpdateDevice;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GlobalNetworkId
 * @property string $DeviceId
 * @property Shapes\AWSLocation $AWSLocation
 * @property string $Description
 * @property string $Type
 * @property string $Vendor
 * @property string $Model
 * @property string $SerialNumber
 * @property Shapes\Location $Location
 * @property string $SiteId
 */
class UpdateDeviceRequest extends Request
{
    /**
     * @param array{
     *     GlobalNetworkId: string,
     *     DeviceId: string,
     *     AWSLocation?: Shapes\AWSLocation,
     *     Description?: string,
     *     Type?: string,
     *     Vendor?: string,
     *     Model?: string,
     *     SerialNumber?: string,
     *     Location?: Shapes\Location,
     *     SiteId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
