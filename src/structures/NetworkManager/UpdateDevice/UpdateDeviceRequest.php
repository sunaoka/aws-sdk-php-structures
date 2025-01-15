<?php

namespace Sunaoka\Aws\Structures\NetworkManager\UpdateDevice;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GlobalNetworkId
 * @property string $DeviceId
 * @property Shapes\AWSLocation|null $AWSLocation
 * @property string|null $Description
 * @property string|null $Type
 * @property string|null $Vendor
 * @property string|null $Model
 * @property string|null $SerialNumber
 * @property Shapes\Location|null $Location
 * @property string|null $SiteId
 */
class UpdateDeviceRequest extends Request
{
    /**
     * @param array{
     *     GlobalNetworkId: string,
     *     DeviceId: string,
     *     AWSLocation?: Shapes\AWSLocation|null,
     *     Description?: string|null,
     *     Type?: string|null,
     *     Vendor?: string|null,
     *     Model?: string|null,
     *     SerialNumber?: string|null,
     *     Location?: Shapes\Location|null,
     *     SiteId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
