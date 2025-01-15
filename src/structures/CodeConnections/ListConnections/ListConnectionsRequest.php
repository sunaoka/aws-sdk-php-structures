<?php

namespace Sunaoka\Aws\Structures\CodeConnections\ListConnections;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'Bitbucket'|'GitHub'|'GitHubEnterpriseServer'|'GitLab'|'GitLabSelfManaged'|null $ProviderTypeFilter
 * @property string|null $HostArnFilter
 * @property int<0, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListConnectionsRequest extends Request
{
    /**
     * @param array{
     *     ProviderTypeFilter?: 'Bitbucket'|'GitHub'|'GitHubEnterpriseServer'|'GitLab'|'GitLabSelfManaged'|null,
     *     HostArnFilter?: string|null,
     *     MaxResults?: int<0, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
