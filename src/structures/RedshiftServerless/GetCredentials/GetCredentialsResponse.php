<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\GetCredentials;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $dbPassword
 * @property string $dbUser
 * @property \Aws\Api\DateTimeResult $expiration
 * @property \Aws\Api\DateTimeResult $nextRefreshTime
 */
class GetCredentialsResponse extends Response
{
}
