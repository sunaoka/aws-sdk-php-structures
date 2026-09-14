<?php

namespace Sunaoka\Aws\Structures\Sts\GetSessionToken;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\Credentials|null $Credentials
 * @property int<0, max>|null $SessionTokenUtilization
 * @property int<0, max>|null $SessionTokenSize
 */
class GetSessionTokenResponse extends Response
{
}
