<?php

namespace Sunaoka\Aws\Structures\LicenseManagerUserSubscriptions\AssociateUser\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SecretId
 */
class SecretsManagerCredentialsProvider extends Shape
{
    /**
     * @param array{SecretId?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
