<?php

namespace Sunaoka\Aws\Structures\CodeConnections\CreateConnection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'Bitbucket'|'GitHub'|'GitHubEnterpriseServer'|'GitLab'|'GitLabSelfManaged'|'AzureDevOps'|'GitHubEnterpriseCloudDataResidency'|null $ProviderType
 * @property string $ConnectionName
 * @property list<Shapes\Tag>|null $Tags
 * @property string|null $HostArn
 * @property string|null $ProviderEndpoint
 */
class CreateConnectionRequest extends Request
{
    /**
     * @param array{
     *     ProviderType?: 'Bitbucket'|'GitHub'|'GitHubEnterpriseServer'|'GitLab'|'GitLabSelfManaged'|'AzureDevOps'|'GitHubEnterpriseCloudDataResidency'|null,
     *     ConnectionName: string,
     *     Tags?: list<Shapes\Tag>|null,
     *     HostArn?: string|null,
     *     ProviderEndpoint?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
