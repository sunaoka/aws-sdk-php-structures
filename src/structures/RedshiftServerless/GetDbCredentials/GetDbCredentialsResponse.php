<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\GetDbCredentials;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $dbPassword
 * @property string|null $dbUser
 * @property \Aws\Api\DateTimeResult|null $expiration
 * @property \Aws\Api\DateTimeResult|null $nextRefreshTime
 */
class GetDbCredentialsResponse extends Response
{
}
