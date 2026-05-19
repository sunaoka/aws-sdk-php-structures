<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\RegisterService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DynatraceServiceDetails|null $dynatrace
 * @property ServiceNowServiceDetails|null $servicenow
 * @property DatadogServiceDetails|null $mcpserverdatadog
 * @property MCPServerDetails|null $mcpserver
 * @property GitLabDetails|null $gitlab
 * @property MCPServerDetails|null $mcpserversplunk
 * @property NewRelicServiceDetails|null $mcpservernewrelic
 * @property EventChannelDetails|null $eventChannel
 * @property GrafanaServiceDetails|null $mcpservergrafana
 * @property PagerDutyDetails|null $pagerduty
 * @property RegisteredAzureIdentityDetails|null $azureidentity
 * @property MCPServerSigV4ServiceDetails|null $mcpserversigv4
 */
class ServiceDetails extends Shape
{
    /**
     * @param array{
     *     dynatrace?: DynatraceServiceDetails|null,
     *     servicenow?: ServiceNowServiceDetails|null,
     *     mcpserverdatadog?: DatadogServiceDetails|null,
     *     mcpserver?: MCPServerDetails|null,
     *     gitlab?: GitLabDetails|null,
     *     mcpserversplunk?: MCPServerDetails|null,
     *     mcpservernewrelic?: NewRelicServiceDetails|null,
     *     eventChannel?: EventChannelDetails|null,
     *     mcpservergrafana?: GrafanaServiceDetails|null,
     *     pagerduty?: PagerDutyDetails|null,
     *     azureidentity?: RegisteredAzureIdentityDetails|null,
     *     mcpserversigv4?: MCPServerSigV4ServiceDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
