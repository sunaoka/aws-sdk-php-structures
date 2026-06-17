<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\RegisterService;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'dynatrace'|'servicenow'|'pagerduty'|'gitlab'|'eventChannel'|'mcpservernewrelic'|'mcpservergrafana'|'mcpserverdatadog'|'mcpserver'|'mcpserversplunk'|'azureidentity'|'mcpserversigv4'|'remoteagent'|'remoteagentsigv4' $service
 * @property Shapes\ServiceDetails $serviceDetails
 * @property string|null $kmsKeyArn
 * @property string|null $privateConnectionName
 * @property string|null $targetUrlPrivateConnectionName
 * @property string|null $exchangeUrlPrivateConnectionName
 * @property string|null $name
 * @property array<string, string>|null $tags
 */
class RegisterServiceRequest extends Request
{
    /**
     * @param array{
     *     service: 'dynatrace'|'servicenow'|'pagerduty'|'gitlab'|'eventChannel'|'mcpservernewrelic'|'mcpservergrafana'|'mcpserverdatadog'|'mcpserver'|'mcpserversplunk'|'azureidentity'|'mcpserversigv4'|'remoteagent'|'remoteagentsigv4',
     *     serviceDetails: Shapes\ServiceDetails,
     *     kmsKeyArn?: string|null,
     *     privateConnectionName?: string|null,
     *     targetUrlPrivateConnectionName?: string|null,
     *     exchangeUrlPrivateConnectionName?: string|null,
     *     name?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
