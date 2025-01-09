<?php

namespace Sunaoka\Aws\Structures\Redshift\GetClusterCredentialsWithIAM;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $DbUser
 * @property string $DbPassword
 * @property \Aws\Api\DateTimeResult $Expiration
 * @property \Aws\Api\DateTimeResult $NextRefreshTime
 */
class GetClusterCredentialsWithIAMResponse extends Response
{
}
