<?php

namespace Sunaoka\Aws\Structures\LicenseManagerUserSubscriptions\UpdateIdentityProviderSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SecretsManagerCredentialsProvider|null $SecretsManagerCredentialsProvider
 */
class CredentialsProvider extends Shape
{
    /**
     * @param array{SecretsManagerCredentialsProvider?: SecretsManagerCredentialsProvider|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
