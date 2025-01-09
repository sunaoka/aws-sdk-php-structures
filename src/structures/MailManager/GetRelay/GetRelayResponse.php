<?php

namespace Sunaoka\Aws\Structures\MailManager\GetRelay;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\RelayAuthentication $Authentication
 * @property \Aws\Api\DateTimeResult $CreatedTimestamp
 * @property \Aws\Api\DateTimeResult $LastModifiedTimestamp
 * @property string $RelayArn
 * @property string $RelayId
 * @property string $RelayName
 * @property string $ServerName
 * @property int<1, 65535> $ServerPort
 */
class GetRelayResponse extends Response
{
}
