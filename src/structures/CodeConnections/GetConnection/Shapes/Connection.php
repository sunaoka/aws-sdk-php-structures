<?php

namespace Sunaoka\Aws\Structures\CodeConnections\GetConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ConnectionName
 * @property string|null $ConnectionArn
 * @property 'Bitbucket'|'GitHub'|'GitHubEnterpriseServer'|'GitLab'|'GitLabSelfManaged'|null $ProviderType
 * @property string|null $OwnerAccountId
 * @property 'PENDING'|'AVAILABLE'|'ERROR'|null $ConnectionStatus
 * @property string|null $HostArn
 */
class Connection extends Shape
{
    /**
     * @param array{
     *     ConnectionName?: string|null,
     *     ConnectionArn?: string|null,
     *     ProviderType?: 'Bitbucket'|'GitHub'|'GitHubEnterpriseServer'|'GitLab'|'GitLabSelfManaged'|null,
     *     OwnerAccountId?: string|null,
     *     ConnectionStatus?: 'PENDING'|'AVAILABLE'|'ERROR'|null,
     *     HostArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
