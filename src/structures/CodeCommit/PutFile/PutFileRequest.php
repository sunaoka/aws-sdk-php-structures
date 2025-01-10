<?php

namespace Sunaoka\Aws\Structures\CodeCommit\PutFile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $repositoryName
 * @property string $branchName
 * @property string|resource|\Psr\Http\Message\StreamInterface $fileContent
 * @property string $filePath
 * @property 'EXECUTABLE'|'NORMAL'|'SYMLINK' $fileMode
 * @property string $parentCommitId
 * @property string $commitMessage
 * @property string $name
 * @property string $email
 */
class PutFileRequest extends Request
{
    /**
     * @param array{
     *     repositoryName: string,
     *     branchName: string,
     *     fileContent: string|resource|\Psr\Http\Message\StreamInterface,
     *     filePath: string,
     *     fileMode?: 'EXECUTABLE'|'NORMAL'|'SYMLINK',
     *     parentCommitId?: string,
     *     commitMessage?: string,
     *     name?: string,
     *     email?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
