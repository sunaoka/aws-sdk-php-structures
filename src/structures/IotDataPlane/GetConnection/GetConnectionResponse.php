<?php

namespace Sunaoka\Aws\Structures\IotDataPlane\GetConnection;

use Sunaoka\Aws\Structures\Response;

/**
 * @property bool|null $connected
 * @property string|null $thingName
 * @property bool|null $cleanSession
 * @property string|null $sourceIp
 * @property int|null $sourcePort
 * @property string|null $targetIp
 * @property int|null $targetPort
 * @property int|null $keepAliveDuration
 * @property int|null $connectedSince
 * @property int|null $disconnectedSince
 * @property string|null $disconnectReason
 * @property int|null $sessionExpiry
 * @property string|null $clientId
 * @property string|null $vpcEndpointId
 */
class GetConnectionResponse extends Response
{
}
