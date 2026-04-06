<?php

namespace Sunaoka\Aws\Structures\CodeBuild\ListSourceCredentials\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property 'GITHUB'|'BITBUCKET'|'GITHUB_ENTERPRISE'|null $serverType
 * @property 'OAUTH'|'BASIC_AUTH'|'PERSONAL_ACCESS_TOKEN'|null $authType
 */
class SourceCredentialsInfo extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     serverType?: 'GITHUB'|'BITBUCKET'|'GITHUB_ENTERPRISE'|null,
     *     authType?: 'OAUTH'|'BASIC_AUTH'|'PERSONAL_ACCESS_TOKEN'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
