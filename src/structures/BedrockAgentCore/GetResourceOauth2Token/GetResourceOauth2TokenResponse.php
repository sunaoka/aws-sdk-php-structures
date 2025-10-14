<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\GetResourceOauth2Token;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $authorizationUrl
 * @property string|null $accessToken
 * @property string|null $sessionUri
 * @property 'IN_PROGRESS'|'FAILED'|null $sessionStatus
 */
class GetResourceOauth2TokenResponse extends Response
{
}
