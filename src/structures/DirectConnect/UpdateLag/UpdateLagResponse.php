<?php

namespace Sunaoka\Aws\Structures\DirectConnect\UpdateLag;

use Sunaoka\Aws\Structures\Response;

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
 * @property list<Shapes\Connection> $connections
 * @property bool $allowsHostedConnections
 * @property bool $jumboFrameCapable
 * @property 'unknown'|'yes'|'no' $hasLogicalRedundancy
 * @property list<Shapes\Tag> $tags
 * @property string $providerName
 * @property bool $macSecCapable
 * @property string $encryptionMode
 * @property list<Shapes\MacSecKey> $macSecKeys
 */
class UpdateLagResponse extends Response
{
}
