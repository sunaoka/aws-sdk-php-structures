<?php

namespace Sunaoka\Aws\Structures\CodeCommit\CreateCommit;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $repositoryName
 * @property string $branchName
 * @property string|null $parentCommitId
 * @property string|null $authorName
 * @property string|null $email
 * @property string|null $commitMessage
 * @property bool|null $keepEmptyFolders
 * @property list<Shapes\PutFileEntry>|null $putFiles
 * @property list<Shapes\DeleteFileEntry>|null $deleteFiles
 * @property list<Shapes\SetFileModeEntry>|null $setFileModes
 */
class CreateCommitRequest extends Request
{
    /**
     * @param array{
     *     repositoryName: string,
     *     branchName: string,
     *     parentCommitId?: string|null,
     *     authorName?: string|null,
     *     email?: string|null,
     *     commitMessage?: string|null,
     *     keepEmptyFolders?: bool|null,
     *     putFiles?: list<Shapes\PutFileEntry>|null,
     *     deleteFiles?: list<Shapes\DeleteFileEntry>|null,
     *     setFileModes?: list<Shapes\SetFileModeEntry>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
