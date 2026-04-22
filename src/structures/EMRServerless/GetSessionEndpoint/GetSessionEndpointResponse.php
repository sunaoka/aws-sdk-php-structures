<?php

namespace Sunaoka\Aws\Structures\EMRServerless\GetSessionEndpoint;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $applicationId
 * @property string $sessionId
 * @property string $endpoint
 * @property string $authToken
 * @property \Aws\Api\DateTimeResult $authTokenExpiresAt
 */
class GetSessionEndpointResponse extends Response
{
}
