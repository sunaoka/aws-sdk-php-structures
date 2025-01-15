<?php

namespace Sunaoka\Aws\Structures\NetworkManager\CreateDevice;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GlobalNetworkId
 * @property Shapes\AWSLocation|null $AWSLocation
 * @property string|null $Description
 * @property string|null $Type
 * @property string|null $Vendor
 * @property string|null $Model
 * @property string|null $SerialNumber
 * @property Shapes\Location|null $Location
 * @property string|null $SiteId
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateDeviceRequest extends Request
{
    /**
     * @param array{
     *     GlobalNetworkId: string,
     *     AWSLocation?: Shapes\AWSLocation|null,
     *     Description?: string|null,
     *     Type?: string|null,
     *     Vendor?: string|null,
     *     Model?: string|null,
     *     SerialNumber?: string|null,
     *     Location?: Shapes\Location|null,
     *     SiteId?: string|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
