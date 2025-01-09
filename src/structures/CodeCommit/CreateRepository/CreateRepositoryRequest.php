<?php

namespace Sunaoka\Aws\Structures\CodeCommit\CreateRepository;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $repositoryName
 * @property string $repositoryDescription
 * @property array<string, string> $tags
 * @property string $kmsKeyId
 */
class CreateRepositoryRequest extends Request
{
    /**
     * @param array{
     *     repositoryName: string,
     *     repositoryDescription?: string,
     *     tags?: array<string, string>,
     *     kmsKeyId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
