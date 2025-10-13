<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\GetResourceOauth2Token;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workloadIdentityToken
 * @property string $resourceCredentialProviderName
 * @property list<string> $scopes
 * @property 'USER_FEDERATION'|'M2M' $oauth2Flow
 * @property string|null $sessionUri
 * @property string|null $resourceOauth2ReturnUrl
 * @property bool|null $forceAuthentication
 * @property array<string, string>|null $customParameters
 * @property string|null $customState
 */
class GetResourceOauth2TokenRequest extends Request
{
    /**
     * @param array{
     *     workloadIdentityToken: string,
     *     resourceCredentialProviderName: string,
     *     scopes: list<string>,
     *     oauth2Flow: 'USER_FEDERATION'|'M2M',
     *     sessionUri?: string|null,
     *     resourceOauth2ReturnUrl?: string|null,
     *     forceAuthentication?: bool|null,
     *     customParameters?: array<string, string>|null,
     *     customState?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
