<?php

namespace Sunaoka\Aws\Structures\CodeStarconnections\CreateConnection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'Bitbucket'|'GitHub'|'GitHubEnterpriseServer'|'GitLab'|'GitLabSelfManaged'|null $ProviderType
 * @property string $ConnectionName
 * @property list<Shapes\Tag>|null $Tags
 * @property string|null $HostArn
 */
class CreateConnectionRequest extends Request
{
    /**
     * @param array{
     *     ProviderType?: 'Bitbucket'|'GitHub'|'GitHubEnterpriseServer'|'GitLab'|'GitLabSelfManaged'|null,
     *     ConnectionName: string,
     *     Tags?: list<Shapes\Tag>|null,
     *     HostArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
