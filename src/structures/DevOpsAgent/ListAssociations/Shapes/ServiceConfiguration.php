<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\ListAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SourceAwsConfiguration|null $sourceAws
 * @property AWSConfiguration|null $aws
 * @property GitHubConfiguration|null $github
 * @property SlackConfiguration|null $slack
 * @property DynatraceConfiguration|null $dynatrace
 * @property ServiceNowConfiguration|null $servicenow
 * @property MCPServerNewRelicConfiguration|null $mcpservernewrelic
 * @property GitLabConfiguration|null $gitlab
 * @property EventChannelConfiguration|null $eventChannel
 * @property AzureConfiguration|null $azure
 * @property AzureDevOpsConfiguration|null $azuredevops
 * @property MCPServerGrafanaConfiguration|null $mcpservergrafana
 * @property PagerDutyConfiguration|null $pagerduty
 */
class ServiceConfiguration extends Shape
{
    /**
     * @param array{
     *     sourceAws?: SourceAwsConfiguration|null,
     *     aws?: AWSConfiguration|null,
     *     github?: GitHubConfiguration|null,
     *     slack?: SlackConfiguration|null,
     *     dynatrace?: DynatraceConfiguration|null,
     *     servicenow?: ServiceNowConfiguration|null,
     *     mcpservernewrelic?: MCPServerNewRelicConfiguration|null,
     *     gitlab?: GitLabConfiguration|null,
     *     eventChannel?: EventChannelConfiguration|null,
     *     azure?: AzureConfiguration|null,
     *     azuredevops?: AzureDevOpsConfiguration|null,
     *     mcpservergrafana?: MCPServerGrafanaConfiguration|null,
     *     pagerduty?: PagerDutyConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
