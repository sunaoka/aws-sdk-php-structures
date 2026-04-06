<?php

namespace Sunaoka\Aws\Structures\DirectConnect\AllocateConnectionOnInterconnect;

use Sunaoka\Aws\Structures\Response;

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
 * @property list<Shapes\Tag>|null $tags
 * @property string|null $providerName
 * @property bool|null $macSecCapable
 * @property string|null $portEncryptionStatus
 * @property string|null $encryptionMode
 * @property list<Shapes\MacSecKey>|null $macSecKeys
 * @property bool|null $partnerInterconnectMacSecCapable
 */
class AllocateConnectionOnInterconnectResponse extends Response
{
}
