<?php

namespace Sunaoka\Aws\Structures\CodeConnections\GetHost;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Name
 * @property string $Status
 * @property 'Bitbucket'|'GitHub'|'GitHubEnterpriseServer'|'GitLab'|'GitLabSelfManaged' $ProviderType
 * @property string $ProviderEndpoint
 * @property Shapes\VpcConfiguration $VpcConfiguration
 */
class GetHostResponse extends Response
{
}
