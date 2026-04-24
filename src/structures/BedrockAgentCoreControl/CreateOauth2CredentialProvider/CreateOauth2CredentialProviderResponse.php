<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateOauth2CredentialProvider;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\Secret $clientSecretArn
 * @property string $name
 * @property string $credentialProviderArn
 * @property string|null $callbackUrl
 * @property Shapes\Oauth2ProviderConfigOutput|null $oauth2ProviderConfigOutput
 * @property 'CREATING'|'CREATE_FAILED'|'UPDATING'|'UPDATE_FAILED'|'READY'|'DELETING'|'DELETE_FAILED'|null $status
 */
class CreateOauth2CredentialProviderResponse extends Response
{
}
