<?php

namespace Sunaoka\Aws\Structures\CodeCommit\BatchGetRepositories\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $repositoryId
 * @property string|null $repositoryName
 * @property 'EncryptionIntegrityChecksFailedException'|'EncryptionKeyAccessDeniedException'|'EncryptionKeyDisabledException'|'EncryptionKeyNotFoundException'|'EncryptionKeyUnavailableException'|'RepositoryDoesNotExistException'|null $errorCode
 * @property string|null $errorMessage
 */
class BatchGetRepositoriesError extends Shape
{
    /**
     * @param array{
     *     repositoryId?: string|null,
     *     repositoryName?: string|null,
     *     errorCode?: 'EncryptionIntegrityChecksFailedException'|'EncryptionKeyAccessDeniedException'|'EncryptionKeyDisabledException'|'EncryptionKeyNotFoundException'|'EncryptionKeyUnavailableException'|'RepositoryDoesNotExistException'|null,
     *     errorMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
