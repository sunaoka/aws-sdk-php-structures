<?php

namespace Sunaoka\Aws\Structures\CodeCommit\CreateCommit;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $repositoryName
 * @property string $branchName
 * @property string $parentCommitId
 * @property string $authorName
 * @property string $email
 * @property string $commitMessage
 * @property bool $keepEmptyFolders
 * @property list<Shapes\PutFileEntry> $putFiles
 * @property list<Shapes\DeleteFileEntry> $deleteFiles
 * @property list<Shapes\SetFileModeEntry> $setFileModes
 */
class CreateCommitRequest extends Request
{
    /**
     * @param array{
     *     repositoryName: string,
     *     branchName: string,
     *     parentCommitId?: string,
     *     authorName?: string,
     *     email?: string,
     *     commitMessage?: string,
     *     keepEmptyFolders?: bool,
     *     putFiles?: list<Shapes\PutFileEntry>,
     *     deleteFiles?: list<Shapes\DeleteFileEntry>,
     *     setFileModes?: list<Shapes\SetFileModeEntry>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
