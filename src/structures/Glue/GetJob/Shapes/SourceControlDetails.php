<?php

namespace Sunaoka\Aws\Structures\Glue\GetJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'GITHUB'|'GITLAB'|'BITBUCKET'|'AWS_CODE_COMMIT' $Provider
 * @property string $Repository
 * @property string $Owner
 * @property string $Branch
 * @property string $Folder
 * @property string $LastCommitId
 * @property 'PERSONAL_ACCESS_TOKEN'|'AWS_SECRETS_MANAGER' $AuthStrategy
 * @property string $AuthToken
 */
class SourceControlDetails extends Shape
{
    /**
     * @param array{
     *     Provider?: 'GITHUB'|'GITLAB'|'BITBUCKET'|'AWS_CODE_COMMIT',
     *     Repository?: string,
     *     Owner?: string,
     *     Branch?: string,
     *     Folder?: string,
     *     LastCommitId?: string,
     *     AuthStrategy?: 'PERSONAL_ACCESS_TOKEN'|'AWS_SECRETS_MANAGER',
     *     AuthToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
