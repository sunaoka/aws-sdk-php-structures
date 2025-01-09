<?php

namespace Sunaoka\Aws\Structures\CodeCommit\UpdateRepositoryEncryptionKey;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $repositoryName
 * @property string $kmsKeyId
 */
class UpdateRepositoryEncryptionKeyRequest extends Request
{
    /**
     * @param array{
     *     repositoryName: string,
     *     kmsKeyId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
