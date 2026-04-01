<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\ListServices;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 * @property 'github'|'slack'|'azure'|'azuredevops'|'dynatrace'|'servicenow'|'pagerduty'|'gitlab'|'eventChannel'|'mcpservernewrelic'|'mcpservergrafana'|'mcpserverdatadog'|'mcpserver'|'mcpserversplunk'|'azureidentity'|null $filterServiceType
 */
class ListServicesRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null,
     *     filterServiceType?: 'github'|'slack'|'azure'|'azuredevops'|'dynatrace'|'servicenow'|'pagerduty'|'gitlab'|'eventChannel'|'mcpservernewrelic'|'mcpservergrafana'|'mcpserverdatadog'|'mcpserver'|'mcpserversplunk'|'azureidentity'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
