<?php

namespace Sunaoka\Aws\Structures\LicenseManagerUserSubscriptions\DisassociateUser\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SecretId
 */
class SecretsManagerCredentialsProvider extends Shape
{
    /**
     * @param array{SecretId?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
