<?php

namespace Sunaoka\Aws\Structures\NetworkManager\CreateDevice\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DeviceId
 * @property string|null $DeviceArn
 * @property string|null $GlobalNetworkId
 * @property AWSLocation|null $AWSLocation
 * @property string|null $Description
 * @property string|null $Type
 * @property string|null $Vendor
 * @property string|null $Model
 * @property string|null $SerialNumber
 * @property Location|null $Location
 * @property string|null $SiteId
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property 'PENDING'|'AVAILABLE'|'DELETING'|'UPDATING'|null $State
 * @property list<Tag>|null $Tags
 */
class Device extends Shape
{
    /**
     * @param array{
     *     DeviceId?: string|null,
     *     DeviceArn?: string|null,
     *     GlobalNetworkId?: string|null,
     *     AWSLocation?: AWSLocation|null,
     *     Description?: string|null,
     *     Type?: string|null,
     *     Vendor?: string|null,
     *     Model?: string|null,
     *     SerialNumber?: string|null,
     *     Location?: Location|null,
     *     SiteId?: string|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     State?: 'PENDING'|'AVAILABLE'|'DELETING'|'UPDATING'|null,
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
