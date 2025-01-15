<?php

namespace Sunaoka\Aws\Structures\Redshift\GetClusterCredentialsWithIAM;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $DbUser
 * @property string|null $DbPassword
 * @property \Aws\Api\DateTimeResult|null $Expiration
 * @property \Aws\Api\DateTimeResult|null $NextRefreshTime
 */
class GetClusterCredentialsWithIAMResponse extends Response
{
}
