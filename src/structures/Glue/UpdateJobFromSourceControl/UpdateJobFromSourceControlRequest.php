<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateJobFromSourceControl;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $JobName
 * @property 'GITHUB'|'GITLAB'|'BITBUCKET'|'AWS_CODE_COMMIT'|null $Provider
 * @property string|null $RepositoryName
 * @property string|null $RepositoryOwner
 * @property string|null $BranchName
 * @property string|null $Folder
 * @property string|null $CommitId
 * @property 'PERSONAL_ACCESS_TOKEN'|'AWS_SECRETS_MANAGER'|null $AuthStrategy
 * @property string|null $AuthToken
 */
class UpdateJobFromSourceControlRequest extends Request
{
    /**
     * @param array{
     *     JobName?: string|null,
     *     Provider?: 'GITHUB'|'GITLAB'|'BITBUCKET'|'AWS_CODE_COMMIT'|null,
     *     RepositoryName?: string|null,
     *     RepositoryOwner?: string|null,
     *     BranchName?: string|null,
     *     Folder?: string|null,
     *     CommitId?: string|null,
     *     AuthStrategy?: 'PERSONAL_ACCESS_TOKEN'|'AWS_SECRETS_MANAGER'|null,
     *     AuthToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
