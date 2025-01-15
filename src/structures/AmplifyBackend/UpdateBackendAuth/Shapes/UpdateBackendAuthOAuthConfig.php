<?php

namespace Sunaoka\Aws\Structures\AmplifyBackend\UpdateBackendAuth\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DomainPrefix
 * @property 'CODE'|'IMPLICIT'|null $OAuthGrantType
 * @property list<'PHONE'|'EMAIL'|'OPENID'|'PROFILE'|'AWS_COGNITO_SIGNIN_USER_ADMIN'>|null $OAuthScopes
 * @property list<string>|null $RedirectSignInURIs
 * @property list<string>|null $RedirectSignOutURIs
 * @property SocialProviderSettings|null $SocialProviderSettings
 */
class UpdateBackendAuthOAuthConfig extends Shape
{
    /**
     * @param array{
     *     DomainPrefix?: string|null,
     *     OAuthGrantType?: 'CODE'|'IMPLICIT'|null,
     *     OAuthScopes?: list<'PHONE'|'EMAIL'|'OPENID'|'PROFILE'|'AWS_COGNITO_SIGNIN_USER_ADMIN'>|null,
     *     RedirectSignInURIs?: list<string>|null,
     *     RedirectSignOutURIs?: list<string>|null,
     *     SocialProviderSettings?: SocialProviderSettings|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
