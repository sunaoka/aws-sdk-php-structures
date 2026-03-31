<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\GetService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RegisteredGithubServiceDetails|null $github
 * @property RegisteredSlackServiceDetails|null $slack
 * @property RegisteredMCPServerDetails|null $mcpserverdatadog
 * @property RegisteredMCPServerDetails|null $mcpserver
 * @property RegisteredServiceNowDetails|null $servicenow
 * @property RegisteredGitLabServiceDetails|null $gitlab
 * @property RegisteredMCPServerDetails|null $mcpserversplunk
 * @property RegisteredNewRelicDetails|null $mcpservernewrelic
 * @property RegisteredAzureDevOpsServiceDetails|null $azuredevops
 * @property RegisteredAzureIdentityDetails|null $azureidentity
 * @property RegisteredGrafanaServerDetails|null $mcpservergrafana
 * @property RegisteredPagerDutyDetails|null $pagerduty
 */
class AdditionalServiceDetails extends Shape
{
    /**
     * @param array{
     *     github?: RegisteredGithubServiceDetails|null,
     *     slack?: RegisteredSlackServiceDetails|null,
     *     mcpserverdatadog?: RegisteredMCPServerDetails|null,
     *     mcpserver?: RegisteredMCPServerDetails|null,
     *     servicenow?: RegisteredServiceNowDetails|null,
     *     gitlab?: RegisteredGitLabServiceDetails|null,
     *     mcpserversplunk?: RegisteredMCPServerDetails|null,
     *     mcpservernewrelic?: RegisteredNewRelicDetails|null,
     *     azuredevops?: RegisteredAzureDevOpsServiceDetails|null,
     *     azureidentity?: RegisteredAzureIdentityDetails|null,
     *     mcpservergrafana?: RegisteredGrafanaServerDetails|null,
     *     pagerduty?: RegisteredPagerDutyDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
