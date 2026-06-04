<?php

namespace Sunaoka\Aws\Structures\Emr\GetSessionEndpoint;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Endpoint
 * @property string|null $AuthToken
 * @property \Aws\Api\DateTimeResult|null $AuthTokenExpirationTime
 * @property Shapes\Credentials|null $Credentials
 */
class GetSessionEndpointResponse extends Response
{
}
