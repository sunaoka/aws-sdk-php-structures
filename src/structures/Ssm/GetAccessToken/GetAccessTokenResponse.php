<?php

namespace Sunaoka\Aws\Structures\Ssm\GetAccessToken;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\Credentials|null $Credentials
 * @property 'Approved'|'Rejected'|'Revoked'|'Expired'|'Pending'|null $AccessRequestStatus
 */
class GetAccessTokenResponse extends Response
{
}
