<?php

namespace Sunaoka\Aws\Structures\CodeConnections\CreateConnection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'Bitbucket'|'GitHub'|'GitHubEnterpriseServer'|'GitLab'|'GitLabSelfManaged' $ProviderType
 * @property string $ConnectionName
 * @property list<Shapes\Tag> $Tags
 * @property string $HostArn
 */
class CreateConnectionRequest extends Request
{
    /**
     * @param array{
     *     ProviderType?: 'Bitbucket'|'GitHub'|'GitHubEnterpriseServer'|'GitLab'|'GitLabSelfManaged',
     *     ConnectionName: string,
     *     Tags?: list<Shapes\Tag>,
     *     HostArn?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
