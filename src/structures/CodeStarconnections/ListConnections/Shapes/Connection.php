<?php

namespace Sunaoka\Aws\Structures\CodeStarconnections\ListConnections\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ConnectionName
 * @property string $ConnectionArn
 * @property 'Bitbucket'|'GitHub'|'GitHubEnterpriseServer'|'GitLab'|'GitLabSelfManaged' $ProviderType
 * @property string $OwnerAccountId
 * @property 'PENDING'|'AVAILABLE'|'ERROR' $ConnectionStatus
 * @property string $HostArn
 */
class Connection extends Shape
{
    /**
     * @param array{
     *     ConnectionName?: string,
     *     ConnectionArn?: string,
     *     ProviderType?: 'Bitbucket'|'GitHub'|'GitHubEnterpriseServer'|'GitLab'|'GitLabSelfManaged',
     *     OwnerAccountId?: string,
     *     ConnectionStatus?: 'PENDING'|'AVAILABLE'|'ERROR',
     *     HostArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
