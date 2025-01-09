<?php

namespace Sunaoka\Aws\Structures\CodeCommit\DeleteFile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $repositoryName
 * @property string $branchName
 * @property string $filePath
 * @property string $parentCommitId
 * @property bool $keepEmptyFolders
 * @property string $commitMessage
 * @property string $name
 * @property string $email
 */
class DeleteFileRequest extends Request
{
    /**
     * @param array{
     *     repositoryName: string,
     *     branchName: string,
     *     filePath: string,
     *     parentCommitId: string,
     *     keepEmptyFolders?: bool,
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
