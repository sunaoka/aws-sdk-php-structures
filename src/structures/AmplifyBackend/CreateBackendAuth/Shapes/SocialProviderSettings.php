<?php

namespace Sunaoka\Aws\Structures\AmplifyBackend\CreateBackendAuth\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BackendAuthSocialProviderConfig $Facebook
 * @property BackendAuthSocialProviderConfig $Google
 * @property BackendAuthSocialProviderConfig $LoginWithAmazon
 * @property BackendAuthAppleProviderConfig $SignInWithApple
 */
class SocialProviderSettings extends Shape
{
    /**
     * @param array{
     *     Facebook?: BackendAuthSocialProviderConfig,
     *     Google?: BackendAuthSocialProviderConfig,
     *     LoginWithAmazon?: BackendAuthSocialProviderConfig,
     *     SignInWithApple?: BackendAuthAppleProviderConfig
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
