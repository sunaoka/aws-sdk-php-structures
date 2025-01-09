<?php

namespace Sunaoka\Aws\Structures\DirectConnect\DescribeLags\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $connectionsBandwidth
 * @property int $numberOfConnections
 * @property string $lagId
 * @property string $ownerAccount
 * @property string $lagName
 * @property 'requested'|'pending'|'available'|'down'|'deleting'|'deleted'|'unknown' $lagState
 * @property string $location
 * @property string $region
 * @property int $minimumLinks
 * @property string $awsDevice
 * @property string $awsDeviceV2
 * @property string $awsLogicalDeviceId
 * @property list<Connection> $connections
 * @property bool $allowsHostedConnections
 * @property bool $jumboFrameCapable
 * @property 'unknown'|'yes'|'no' $hasLogicalRedundancy
 * @property list<Tag> $tags
 * @property string $providerName
 * @property bool $macSecCapable
 * @property string $encryptionMode
 * @property list<MacSecKey> $macSecKeys
 */
class Lag extends Shape
{
    /**
     * @param array{
     *     connectionsBandwidth?: string,
     *     numberOfConnections?: int,
     *     lagId?: string,
     *     ownerAccount?: string,
     *     lagName?: string,
     *     lagState?: 'requested'|'pending'|'available'|'down'|'deleting'|'deleted'|'unknown',
     *     location?: string,
     *     region?: string,
     *     minimumLinks?: int,
     *     awsDevice?: string,
     *     awsDeviceV2?: string,
     *     awsLogicalDeviceId?: string,
     *     connections?: list<Connection>,
     *     allowsHostedConnections?: bool,
     *     jumboFrameCapable?: bool,
     *     hasLogicalRedundancy?: 'unknown'|'yes'|'no',
     *     tags?: list<Tag>,
     *     providerName?: string,
     *     macSecCapable?: bool,
     *     encryptionMode?: string,
     *     macSecKeys?: list<MacSecKey>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
