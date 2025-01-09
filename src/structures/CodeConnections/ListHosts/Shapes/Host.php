<?php

namespace Sunaoka\Aws\Structures\CodeConnections\ListHosts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $HostArn
 * @property 'Bitbucket'|'GitHub'|'GitHubEnterpriseServer'|'GitLab'|'GitLabSelfManaged' $ProviderType
 * @property string $ProviderEndpoint
 * @property VpcConfiguration $VpcConfiguration
 * @property string $Status
 * @property string $StatusMessage
 */
class Host extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     HostArn?: string,
     *     ProviderType?: 'Bitbucket'|'GitHub'|'GitHubEnterpriseServer'|'GitLab'|'GitLabSelfManaged',
     *     ProviderEndpoint?: string,
     *     VpcConfiguration?: VpcConfiguration,
     *     Status?: string,
     *     StatusMessage?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
