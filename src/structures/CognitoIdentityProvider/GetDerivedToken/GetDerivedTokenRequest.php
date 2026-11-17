<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\GetDerivedToken;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientId
 * @property string|null $ClientSecret
 * @property string $SubjectToken
 * @property 'ACCESS_TOKEN'|'ID_TOKEN'|'SAML2' $SubjectTokenType
 * @property string|null $SubjectTokenProviderName
 * @property string|null $ActorToken
 * @property 'ACCESS_TOKEN'|'ID_TOKEN'|'SAML2'|null $ActorTokenType
 * @property string|null $ActorTokenProviderName
 * @property list<string>|null $Scopes
 * @property list<string>|null $Audiences
 * @property list<string>|null $Resources
 * @property 'ACCESS_TOKEN'|'ID_TOKEN'|null $RequestedTokenType
 */
class GetDerivedTokenRequest extends Request
{
    /**
     * @param array{
     *     ClientId: string,
     *     ClientSecret?: string|null,
     *     SubjectToken: string,
     *     SubjectTokenType: 'ACCESS_TOKEN'|'ID_TOKEN'|'SAML2',
     *     SubjectTokenProviderName?: string|null,
     *     ActorToken?: string|null,
     *     ActorTokenType?: 'ACCESS_TOKEN'|'ID_TOKEN'|'SAML2'|null,
     *     ActorTokenProviderName?: string|null,
     *     Scopes?: list<string>|null,
     *     Audiences?: list<string>|null,
     *     Resources?: list<string>|null,
     *     RequestedTokenType?: 'ACCESS_TOKEN'|'ID_TOKEN'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
