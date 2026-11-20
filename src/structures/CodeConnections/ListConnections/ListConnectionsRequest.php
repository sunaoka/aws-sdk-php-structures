<?php

namespace Sunaoka\Aws\Structures\CodeConnections\ListConnections;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $HostArnFilter
 * @property 'Bitbucket'|'GitHub'|'GitHubEnterpriseServer'|'GitLab'|'GitLabSelfManaged'|'AzureDevOps'|'GitHubEnterpriseCloudDataResidency'|null $ProviderTypeFilter
 * @property int<0, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListConnectionsRequest extends Request
{
    /**
     * @param array{
     *     HostArnFilter?: string|null,
     *     ProviderTypeFilter?: 'Bitbucket'|'GitHub'|'GitHubEnterpriseServer'|'GitLab'|'GitLabSelfManaged'|'AzureDevOps'|'GitHubEnterpriseCloudDataResidency'|null,
     *     MaxResults?: int<0, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
