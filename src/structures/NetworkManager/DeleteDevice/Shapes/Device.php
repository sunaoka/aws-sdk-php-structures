<?php

namespace Sunaoka\Aws\Structures\NetworkManager\DeleteDevice\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DeviceId
 * @property string $DeviceArn
 * @property string $GlobalNetworkId
 * @property AWSLocation $AWSLocation
 * @property string $Description
 * @property string $Type
 * @property string $Vendor
 * @property string $Model
 * @property string $SerialNumber
 * @property Location $Location
 * @property string $SiteId
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property 'PENDING'|'AVAILABLE'|'DELETING'|'UPDATING' $State
 * @property list<Tag> $Tags
 */
class Device extends Shape
{
    /**
     * @param array{
     *     DeviceId?: string,
     *     DeviceArn?: string,
     *     GlobalNetworkId?: string,
     *     AWSLocation?: AWSLocation,
     *     Description?: string,
     *     Type?: string,
     *     Vendor?: string,
     *     Model?: string,
     *     SerialNumber?: string,
     *     Location?: Location,
     *     SiteId?: string,
     *     CreatedAt?: \Aws\Api\DateTimeResult,
     *     State?: 'PENDING'|'AVAILABLE'|'DELETING'|'UPDATING',
     *     Tags?: list<Tag>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
