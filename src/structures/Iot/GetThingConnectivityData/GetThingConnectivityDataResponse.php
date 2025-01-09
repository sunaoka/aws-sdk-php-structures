<?php

namespace Sunaoka\Aws\Structures\Iot\GetThingConnectivityData;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $thingName
 * @property bool $connected
 * @property \Aws\Api\DateTimeResult $timestamp
 * @property 'AUTH_ERROR'|'CLIENT_INITIATED_DISCONNECT'|'CLIENT_ERROR'|'CONNECTION_LOST'|'DUPLICATE_CLIENTID'|'FORBIDDEN_ACCESS'|'MQTT_KEEP_ALIVE_TIMEOUT'|'SERVER_ERROR'|'SERVER_INITIATED_DISCONNECT'|'THROTTLED'|'WEBSOCKET_TTL_EXPIRATION'|'CUSTOMAUTH_TTL_EXPIRATION'|'UNKNOWN'|'NONE' $disconnectReason
 */
class GetThingConnectivityDataResponse extends Response
{
}
