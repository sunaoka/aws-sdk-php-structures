<?php

namespace Sunaoka\Aws\Structures\CodeBuild\ImportSourceCredentials;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $username
 * @property string $token
 * @property 'GITHUB'|'BITBUCKET'|'GITHUB_ENTERPRISE' $serverType
 * @property 'OAUTH'|'BASIC_AUTH'|'PERSONAL_ACCESS_TOKEN' $authType
 * @property bool|null $shouldOverwrite
 */
class ImportSourceCredentialsRequest extends Request
{
    /**
     * @param array{
     *     username?: string|null,
     *     token: string,
     *     serverType: 'GITHUB'|'BITBUCKET'|'GITHUB_ENTERPRISE',
     *     authType: 'OAUTH'|'BASIC_AUTH'|'PERSONAL_ACCESS_TOKEN',
     *     shouldOverwrite?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
