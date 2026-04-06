<?php

namespace Sunaoka\Aws\Structures\MailManager\GetRelay;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $RelayId
 * @property string|null $RelayArn
 * @property string|null $RelayName
 * @property string|null $ServerName
 * @property int<1, 65535>|null $ServerPort
 * @property Shapes\RelayAuthentication|null $Authentication
 * @property \Aws\Api\DateTimeResult|null $CreatedTimestamp
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTimestamp
 */
class GetRelayResponse extends Response
{
}
