<?php

namespace Sunaoka\Aws\Structures\CodeConnections\ListHosts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $HostArn
 * @property 'Bitbucket'|'GitHub'|'GitHubEnterpriseServer'|'GitLab'|'GitLabSelfManaged'|null $ProviderType
 * @property string|null $ProviderEndpoint
 * @property VpcConfiguration|null $VpcConfiguration
 * @property string|null $Status
 * @property string|null $StatusMessage
 */
class Host extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     HostArn?: string|null,
     *     ProviderType?: 'Bitbucket'|'GitHub'|'GitHubEnterpriseServer'|'GitLab'|'GitLabSelfManaged'|null,
     *     ProviderEndpoint?: string|null,
     *     VpcConfiguration?: VpcConfiguration|null,
     *     Status?: string|null,
     *     StatusMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
