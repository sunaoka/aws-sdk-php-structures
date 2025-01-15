<?php

namespace Sunaoka\Aws\Structures\CodeBuild\ListSourceCredentials\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property 'GITHUB'|'BITBUCKET'|'GITHUB_ENTERPRISE'|'GITLAB'|'GITLAB_SELF_MANAGED'|null $serverType
 * @property 'OAUTH'|'BASIC_AUTH'|'PERSONAL_ACCESS_TOKEN'|'CODECONNECTIONS'|'SECRETS_MANAGER'|null $authType
 * @property string|null $resource
 */
class SourceCredentialsInfo extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     serverType?: 'GITHUB'|'BITBUCKET'|'GITHUB_ENTERPRISE'|'GITLAB'|'GITLAB_SELF_MANAGED'|null,
     *     authType?: 'OAUTH'|'BASIC_AUTH'|'PERSONAL_ACCESS_TOKEN'|'CODECONNECTIONS'|'SECRETS_MANAGER'|null,
     *     resource?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
