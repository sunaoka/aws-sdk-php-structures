<?php

namespace Sunaoka\Aws\Structures\CodeConnections\ListConnections;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'Bitbucket'|'GitHub'|'GitHubEnterpriseServer'|'GitLab'|'GitLabSelfManaged' $ProviderTypeFilter
 * @property string $HostArnFilter
 * @property int $MaxResults
 * @property string $NextToken
 */
class ListConnectionsRequest extends Request
{
    /**
     * @param array{
     *     ProviderTypeFilter?: 'Bitbucket'|'GitHub'|'GitHubEnterpriseServer'|'GitLab'|'GitLabSelfManaged',
     *     HostArnFilter?: string,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
