<?php

namespace Sunaoka\Aws\Structures\AmplifyBackend\GetBackendAuth\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DomainPrefix
 * @property 'CODE'|'IMPLICIT' $OAuthGrantType
 * @property list<'PHONE'|'EMAIL'|'OPENID'|'PROFILE'|'AWS_COGNITO_SIGNIN_USER_ADMIN'> $OAuthScopes
 * @property list<string> $RedirectSignInURIs
 * @property list<string> $RedirectSignOutURIs
 * @property SocialProviderSettings|null $SocialProviderSettings
 */
class CreateBackendAuthOAuthConfig extends Shape
{
    /**
     * @param array{
     *     DomainPrefix?: string|null,
     *     OAuthGrantType: 'CODE'|'IMPLICIT',
     *     OAuthScopes: list<'PHONE'|'EMAIL'|'OPENID'|'PROFILE'|'AWS_COGNITO_SIGNIN_USER_ADMIN'>,
     *     RedirectSignInURIs: list<string>,
     *     RedirectSignOutURIs: list<string>,
     *     SocialProviderSettings?: SocialProviderSettings|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
