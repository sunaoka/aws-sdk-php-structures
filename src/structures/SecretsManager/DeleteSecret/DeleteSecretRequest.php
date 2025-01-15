<?php

namespace Sunaoka\Aws\Structures\SecretsManager\DeleteSecret;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SecretId
 * @property int|null $RecoveryWindowInDays
 * @property bool|null $ForceDeleteWithoutRecovery
 */
class DeleteSecretRequest extends Request
{
    /**
     * @param array{
     *     SecretId: string,
     *     RecoveryWindowInDays?: int|null,
     *     ForceDeleteWithoutRecovery?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
