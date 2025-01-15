<?php

namespace Sunaoka\Aws\Structures\DirectConnect\CreateLag;

use Sunaoka\Aws\Structures\Response;

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
 * @property list<Shapes\Connection>|null $connections
 * @property bool|null $allowsHostedConnections
 * @property bool|null $jumboFrameCapable
 * @property 'unknown'|'yes'|'no'|null $hasLogicalRedundancy
 * @property list<Shapes\Tag>|null $tags
 * @property string|null $providerName
 * @property bool|null $macSecCapable
 * @property string|null $encryptionMode
 * @property list<Shapes\MacSecKey>|null $macSecKeys
 */
class CreateLagResponse extends Response
{
}
