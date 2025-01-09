<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateSourceControlFromJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $JobName
 * @property 'GITHUB'|'GITLAB'|'BITBUCKET'|'AWS_CODE_COMMIT' $Provider
 * @property string $RepositoryName
 * @property string $RepositoryOwner
 * @property string $BranchName
 * @property string $Folder
 * @property string $CommitId
 * @property 'PERSONAL_ACCESS_TOKEN'|'AWS_SECRETS_MANAGER' $AuthStrategy
 * @property string $AuthToken
 */
class UpdateSourceControlFromJobRequest extends Request
{
    /**
     * @param array{
     *     JobName?: string,
     *     Provider?: 'GITHUB'|'GITLAB'|'BITBUCKET'|'AWS_CODE_COMMIT',
     *     RepositoryName?: string,
     *     RepositoryOwner?: string,
     *     BranchName?: string,
     *     Folder?: string,
     *     CommitId?: string,
     *     AuthStrategy?: 'PERSONAL_ACCESS_TOKEN'|'AWS_SECRETS_MANAGER',
     *     AuthToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
