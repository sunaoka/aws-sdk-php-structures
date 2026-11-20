<?php

namespace Sunaoka\Aws\Structures\CodeConnections\ListConnections\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ConnectionName
 * @property string|null $ConnectionArn
 * @property 'Bitbucket'|'GitHub'|'GitHubEnterpriseServer'|'GitLab'|'GitLabSelfManaged'|'AzureDevOps'|'GitHubEnterpriseCloudDataResidency'|null $ProviderType
 * @property string|null $OwnerAccountId
 * @property 'PENDING'|'AVAILABLE'|'ERROR'|null $ConnectionStatus
 * @property string|null $HostArn
 * @property string|null $ProviderEndpoint
 */
class Connection extends Shape
{
    /**
     * @param array{
     *     ConnectionName?: string|null,
     *     ConnectionArn?: string|null,
     *     ProviderType?: 'Bitbucket'|'GitHub'|'GitHubEnterpriseServer'|'GitLab'|'GitLabSelfManaged'|'AzureDevOps'|'GitHubEnterpriseCloudDataResidency'|null,
     *     OwnerAccountId?: string|null,
     *     ConnectionStatus?: 'PENDING'|'AVAILABLE'|'ERROR'|null,
     *     HostArn?: string|null,
     *     ProviderEndpoint?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
