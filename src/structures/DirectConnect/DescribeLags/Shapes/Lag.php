<?php

namespace Sunaoka\Aws\Structures\DirectConnect\DescribeLags\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $connectionsBandwidth
 * @property int|null $numberOfConnections
 * @property string|null $lagId
 * @property string|null $ownerAccount
 * @property string|null $lagName
 * @property 'requested'|'pending'|'available'|'down'|'deleting'|'deleted'|'unknown'|null $lagState
 * @property string|null $location
 * @property string|null $region
 * @property int|null $minimumLinks
 * @property string|null $awsDevice
 * @property string|null $awsDeviceV2
 * @property string|null $awsLogicalDeviceId
 * @property list<Connection>|null $connections
 * @property bool|null $allowsHostedConnections
 * @property bool|null $jumboFrameCapable
 * @property 'unknown'|'yes'|'no'|null $hasLogicalRedundancy
 * @property list<Tag>|null $tags
 * @property string|null $providerName
 * @property bool|null $macSecCapable
 * @property string|null $encryptionMode
 * @property list<MacSecKey>|null $macSecKeys
 */
class Lag extends Shape
{
    /**
     * @param array{
     *     connectionsBandwidth?: string|null,
     *     numberOfConnections?: int|null,
     *     lagId?: string|null,
     *     ownerAccount?: string|null,
     *     lagName?: string|null,
     *     lagState?: 'requested'|'pending'|'available'|'down'|'deleting'|'deleted'|'unknown'|null,
     *     location?: string|null,
     *     region?: string|null,
     *     minimumLinks?: int|null,
     *     awsDevice?: string|null,
     *     awsDeviceV2?: string|null,
     *     awsLogicalDeviceId?: string|null,
     *     connections?: list<Connection>|null,
     *     allowsHostedConnections?: bool|null,
     *     jumboFrameCapable?: bool|null,
     *     hasLogicalRedundancy?: 'unknown'|'yes'|'no'|null,
     *     tags?: list<Tag>|null,
     *     providerName?: string|null,
     *     macSecCapable?: bool|null,
     *     encryptionMode?: string|null,
     *     macSecKeys?: list<MacSecKey>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
