<?php

namespace Sunaoka\Aws\Structures\SecretsManager\UpdateSecretVersionStage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SecretId
 * @property string $VersionStage
 * @property string $RemoveFromVersionId
 * @property string $MoveToVersionId
 */
class UpdateSecretVersionStageRequest extends Request
{
    /**
     * @param array{
     *     SecretId: string,
     *     VersionStage: string,
     *     RemoveFromVersionId?: string,
     *     MoveToVersionId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
