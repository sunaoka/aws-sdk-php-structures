<?php

namespace Sunaoka\Aws\Structures\LicenseManagerUserSubscriptions\ListUserAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SecretsManagerCredentialsProvider $SecretsManagerCredentialsProvider
 */
class CredentialsProvider extends Shape
{
    /**
     * @param array{SecretsManagerCredentialsProvider?: SecretsManagerCredentialsProvider} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
