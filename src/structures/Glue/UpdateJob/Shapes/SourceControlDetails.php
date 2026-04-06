<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'GITHUB'|'GITLAB'|'BITBUCKET'|'AWS_CODE_COMMIT'|null $Provider
 * @property string|null $Repository
 * @property string|null $Owner
 * @property string|null $Branch
 * @property string|null $Folder
 * @property string|null $LastCommitId
 * @property 'PERSONAL_ACCESS_TOKEN'|'AWS_SECRETS_MANAGER'|null $AuthStrategy
 * @property string|null $AuthToken
 */
class SourceControlDetails extends Shape
{
    /**
     * @param array{
     *     Provider?: 'GITHUB'|'GITLAB'|'BITBUCKET'|'AWS_CODE_COMMIT'|null,
     *     Repository?: string|null,
     *     Owner?: string|null,
     *     Branch?: string|null,
     *     Folder?: string|null,
     *     LastCommitId?: string|null,
     *     AuthStrategy?: 'PERSONAL_ACCESS_TOKEN'|'AWS_SECRETS_MANAGER'|null,
     *     AuthToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
