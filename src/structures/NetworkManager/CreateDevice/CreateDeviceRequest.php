<?php

namespace Sunaoka\Aws\Structures\NetworkManager\CreateDevice;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GlobalNetworkId
 * @property Shapes\AWSLocation $AWSLocation
 * @property string $Description
 * @property string $Type
 * @property string $Vendor
 * @property string $Model
 * @property string $SerialNumber
 * @property Shapes\Location $Location
 * @property string $SiteId
 * @property list<Shapes\Tag> $Tags
 */
class CreateDeviceRequest extends Request
{
    /**
     * @param array{
     *     GlobalNetworkId: string,
     *     AWSLocation?: Shapes\AWSLocation,
     *     Description?: string,
     *     Type?: string,
     *     Vendor?: string,
     *     Model?: string,
     *     SerialNumber?: string,
     *     Location?: Shapes\Location,
     *     SiteId?: string,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
