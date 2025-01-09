<?php

namespace Sunaoka\Aws\Structures\SecretsManager\CancelRotateSecret;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SecretId
 */
class CancelRotateSecretRequest extends Request
{
    /**
     * @param array{SecretId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
