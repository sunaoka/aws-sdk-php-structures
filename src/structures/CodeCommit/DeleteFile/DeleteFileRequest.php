<?php

namespace Sunaoka\Aws\Structures\CodeCommit\DeleteFile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $repositoryName
 * @property string $branchName
 * @property string $filePath
 * @property string $parentCommitId
 * @property bool|null $keepEmptyFolders
 * @property string|null $commitMessage
 * @property string|null $name
 * @property string|null $email
 */
class DeleteFileRequest extends Request
{
    /**
     * @param array{
     *     repositoryName: string,
     *     branchName: string,
     *     filePath: string,
     *     parentCommitId: string,
     *     keepEmptyFolders?: bool|null,
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
