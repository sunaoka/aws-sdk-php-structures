<?php

namespace Sunaoka\Aws\Structures\SecretsManager\UpdateSecretVersionStage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SecretId
 * @property string $VersionStage
 * @property string|null $RemoveFromVersionId
 * @property string|null $MoveToVersionId
 */
class UpdateSecretVersionStageRequest extends Request
{
    /**
     * @param array{
     *     SecretId: string,
     *     VersionStage: string,
     *     RemoveFromVersionId?: string|null,
     *     MoveToVersionId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
