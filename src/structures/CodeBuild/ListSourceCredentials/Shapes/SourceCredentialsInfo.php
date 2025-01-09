<?php

namespace Sunaoka\Aws\Structures\CodeBuild\ListSourceCredentials\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property 'GITHUB'|'BITBUCKET'|'GITHUB_ENTERPRISE'|'GITLAB'|'GITLAB_SELF_MANAGED' $serverType
 * @property 'OAUTH'|'BASIC_AUTH'|'PERSONAL_ACCESS_TOKEN'|'CODECONNECTIONS'|'SECRETS_MANAGER' $authType
 * @property string $resource
 */
class SourceCredentialsInfo extends Shape
{
    /**
     * @param array{
     *     arn?: string,
     *     serverType?: 'GITHUB'|'BITBUCKET'|'GITHUB_ENTERPRISE'|'GITLAB'|'GITLAB_SELF_MANAGED',
     *     authType?: 'OAUTH'|'BASIC_AUTH'|'PERSONAL_ACCESS_TOKEN'|'CODECONNECTIONS'|'SECRETS_MANAGER',
     *     resource?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
