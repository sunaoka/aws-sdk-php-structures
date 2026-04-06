<?php

namespace Sunaoka\Aws\Structures\DirectConnect\UpdateLag\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ownerAccount
 * @property string|null $connectionId
 * @property string|null $connectionName
 * @property 'ordering'|'requested'|'pending'|'available'|'down'|'deleting'|'deleted'|'rejected'|'unknown'|null $connectionState
 * @property string|null $region
 * @property string|null $location
 * @property string|null $bandwidth
 * @property int|null $vlan
 * @property string|null $partnerName
 * @property \Aws\Api\DateTimeResult|null $loaIssueTime
 * @property string|null $lagId
 * @property string|null $awsDevice
 * @property bool|null $jumboFrameCapable
 * @property string|null $awsDeviceV2
 * @property string|null $awsLogicalDeviceId
 * @property 'unknown'|'yes'|'no'|null $hasLogicalRedundancy
 * @property list<Tag>|null $tags
 * @property string|null $providerName
 * @property bool|null $macSecCapable
 * @property string|null $portEncryptionStatus
 * @property string|null $encryptionMode
 * @property list<MacSecKey>|null $macSecKeys
 */
class Connection extends Shape
{
    /**
     * @param array{
     *     ownerAccount?: string|null,
     *     connectionId?: string|null,
     *     connectionName?: string|null,
     *     connectionState?: 'ordering'|'requested'|'pending'|'available'|'down'|'deleting'|'deleted'|'rejected'|'unknown'|null,
     *     region?: string|null,
     *     location?: string|null,
     *     bandwidth?: string|null,
     *     vlan?: int|null,
     *     partnerName?: string|null,
     *     loaIssueTime?: \Aws\Api\DateTimeResult|null,
     *     lagId?: string|null,
     *     awsDevice?: string|null,
     *     jumboFrameCapable?: bool|null,
     *     awsDeviceV2?: string|null,
     *     awsLogicalDeviceId?: string|null,
     *     hasLogicalRedundancy?: 'unknown'|'yes'|'no'|null,
     *     tags?: list<Tag>|null,
     *     providerName?: string|null,
     *     macSecCapable?: bool|null,
     *     portEncryptionStatus?: string|null,
     *     encryptionMode?: string|null,
     *     macSecKeys?: list<MacSecKey>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
