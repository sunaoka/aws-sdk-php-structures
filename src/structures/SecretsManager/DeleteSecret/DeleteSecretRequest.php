<?php

namespace Sunaoka\Aws\Structures\SecretsManager\DeleteSecret;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SecretId
 * @property int $RecoveryWindowInDays
 * @property bool $ForceDeleteWithoutRecovery
 */
class DeleteSecretRequest extends Request
{
    /**
     * @param array{
     *     SecretId: string,
     *     RecoveryWindowInDays?: int,
     *     ForceDeleteWithoutRecovery?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
