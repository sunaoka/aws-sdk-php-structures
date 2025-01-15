<?php

namespace Sunaoka\Aws\Structures\CodeCommit\PutFile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $repositoryName
 * @property string $branchName
 * @property string|resource|\Psr\Http\Message\StreamInterface $fileContent
 * @property string $filePath
 * @property 'EXECUTABLE'|'NORMAL'|'SYMLINK'|null $fileMode
 * @property string|null $parentCommitId
 * @property string|null $commitMessage
 * @property string|null $name
 * @property string|null $email
 */
class PutFileRequest extends Request
{
    /**
     * @param array{
     *     repositoryName: string,
     *     branchName: string,
     *     fileContent: string|resource|\Psr\Http\Message\StreamInterface,
     *     filePath: string,
     *     fileMode?: 'EXECUTABLE'|'NORMAL'|'SYMLINK'|null,
     *     parentCommitId?: string|null,
     *     commitMessage?: string|null,
     *     name?: string|null,
     *     email?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
