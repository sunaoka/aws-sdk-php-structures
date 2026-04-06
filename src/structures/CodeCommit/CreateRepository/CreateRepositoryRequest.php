<?php

namespace Sunaoka\Aws\Structures\CodeCommit\CreateRepository;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $repositoryName
 * @property string|null $repositoryDescription
 * @property array<string, string>|null $tags
 */
class CreateRepositoryRequest extends Request
{
    /**
     * @param array{
     *     repositoryName: string,
     *     repositoryDescription?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
