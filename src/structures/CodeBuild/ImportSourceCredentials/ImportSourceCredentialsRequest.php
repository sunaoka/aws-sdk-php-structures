<?php

namespace Sunaoka\Aws\Structures\CodeBuild\ImportSourceCredentials;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $username
 * @property string $token
 * @property 'GITHUB'|'BITBUCKET'|'GITHUB_ENTERPRISE'|'GITLAB'|'GITLAB_SELF_MANAGED' $serverType
 * @property 'OAUTH'|'BASIC_AUTH'|'PERSONAL_ACCESS_TOKEN'|'CODECONNECTIONS'|'SECRETS_MANAGER' $authType
 * @property bool $shouldOverwrite
 */
class ImportSourceCredentialsRequest extends Request
{
    /**
     * @param array{
     *     username?: string,
     *     token: string,
     *     serverType: 'GITHUB'|'BITBUCKET'|'GITHUB_ENTERPRISE'|'GITLAB'|'GITLAB_SELF_MANAGED',
     *     authType: 'OAUTH'|'BASIC_AUTH'|'PERSONAL_ACCESS_TOKEN'|'CODECONNECTIONS'|'SECRETS_MANAGER',
     *     shouldOverwrite?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
