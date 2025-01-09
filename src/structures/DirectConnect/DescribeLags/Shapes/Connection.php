<?php

namespace Sunaoka\Aws\Structures\DirectConnect\DescribeLags\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ownerAccount
 * @property string $connectionId
 * @property string $connectionName
 * @property 'ordering'|'requested'|'pending'|'available'|'down'|'deleting'|'deleted'|'rejected'|'unknown' $connectionState
 * @property string $region
 * @property string $location
 * @property string $bandwidth
 * @property int $vlan
 * @property string $partnerName
 * @property \Aws\Api\DateTimeResult $loaIssueTime
 * @property string $lagId
 * @property string $awsDevice
 * @property bool $jumboFrameCapable
 * @property string $awsDeviceV2
 * @property string $awsLogicalDeviceId
 * @property 'unknown'|'yes'|'no' $hasLogicalRedundancy
 * @property list<Tag> $tags
 * @property string $providerName
 * @property bool $macSecCapable
 * @property string $portEncryptionStatus
 * @property string $encryptionMode
 * @property list<MacSecKey> $macSecKeys
 */
class Connection extends Shape
{
    /**
     * @param array{
     *     ownerAccount?: string,
     *     connectionId?: string,
     *     connectionName?: string,
     *     connectionState?: 'ordering'|'requested'|'pending'|'available'|'down'|'deleting'|'deleted'|'rejected'|'unknown',
     *     region?: string,
     *     location?: string,
     *     bandwidth?: string,
     *     vlan?: int,
     *     partnerName?: string,
     *     loaIssueTime?: \Aws\Api\DateTimeResult,
     *     lagId?: string,
     *     awsDevice?: string,
     *     jumboFrameCapable?: bool,
     *     awsDeviceV2?: string,
     *     awsLogicalDeviceId?: string,
     *     hasLogicalRedundancy?: 'unknown'|'yes'|'no',
     *     tags?: list<Tag>,
     *     providerName?: string,
     *     macSecCapable?: bool,
     *     portEncryptionStatus?: string,
     *     encryptionMode?: string,
     *     macSecKeys?: list<MacSecKey>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
