<?php

namespace Sunaoka\Aws\Structures\SecretsManager\RestoreSecret;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SecretId
 */
class RestoreSecretRequest extends Request
{
    /**
     * @param array{SecretId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
