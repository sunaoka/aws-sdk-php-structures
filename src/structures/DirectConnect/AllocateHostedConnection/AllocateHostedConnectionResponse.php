<?php

namespace Sunaoka\Aws\Structures\DirectConnect\AllocateHostedConnection;

use Sunaoka\Aws\Structures\Response;

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
 * @property list<Shapes\Tag> $tags
 * @property string $providerName
 * @property bool $macSecCapable
 * @property string $portEncryptionStatus
 * @property string $encryptionMode
 * @property list<Shapes\MacSecKey> $macSecKeys
 */
class AllocateHostedConnectionResponse extends Response
{
}
