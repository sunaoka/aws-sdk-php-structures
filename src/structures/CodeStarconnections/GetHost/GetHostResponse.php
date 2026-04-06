<?php

namespace Sunaoka\Aws\Structures\CodeStarconnections\GetHost;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Name
 * @property string|null $Status
 * @property 'Bitbucket'|'GitHub'|'GitHubEnterpriseServer'|'GitLab'|'GitLabSelfManaged'|null $ProviderType
 * @property string|null $ProviderEndpoint
 * @property Shapes\VpcConfiguration|null $VpcConfiguration
 */
class GetHostResponse extends Response
{
}
