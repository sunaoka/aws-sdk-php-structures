<?php

namespace Sunaoka\Aws\Structures\CodeCommit\BatchGetRepositories\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $repositoryId
 * @property string $repositoryName
 * @property 'EncryptionIntegrityChecksFailedException'|'EncryptionKeyAccessDeniedException'|'EncryptionKeyDisabledException'|'EncryptionKeyNotFoundException'|'EncryptionKeyUnavailableException'|'RepositoryDoesNotExistException' $errorCode
 * @property string $errorMessage
 */
class BatchGetRepositoriesError extends Shape
{
    /**
     * @param array{
     *     repositoryId?: string,
     *     repositoryName?: string,
     *     errorCode?: 'EncryptionIntegrityChecksFailedException'|'EncryptionKeyAccessDeniedException'|'EncryptionKeyDisabledException'|'EncryptionKeyNotFoundException'|'EncryptionKeyUnavailableException'|'RepositoryDoesNotExistException',
     *     errorMessage?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
