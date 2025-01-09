<?php

namespace Sunaoka\Aws\Structures\CodeConnections\CreateHost;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property 'Bitbucket'|'GitHub'|'GitHubEnterpriseServer'|'GitLab'|'GitLabSelfManaged' $ProviderType
 * @property string $ProviderEndpoint
 * @property Shapes\VpcConfiguration $VpcConfiguration
 * @property list<Shapes\Tag> $Tags
 */
class CreateHostRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     ProviderType: 'Bitbucket'|'GitHub'|'GitHubEnterpriseServer'|'GitLab'|'GitLabSelfManaged',
     *     ProviderEndpoint: string,
     *     VpcConfiguration?: Shapes\VpcConfiguration,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
