<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\GetService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $serviceId
 * @property 'github'|'slack'|'azure'|'azuredevops'|'dynatrace'|'servicenow'|'pagerduty'|'gitlab'|'eventChannel'|'mcpservernewrelic'|'mcpservergrafana'|'mcpserverdatadog'|'mcpserver'|'mcpserversplunk'|'azureidentity' $serviceType
 * @property string|null $name
 * @property list<Document>|null $accessibleResources
 * @property AdditionalServiceDetails|null $additionalServiceDetails
 * @property string|null $kmsKeyArn
 * @property string|null $privateConnectionName
 */
class RegisteredService extends Shape
{
    /**
     * @param array{
     *     serviceId: string,
     *     serviceType: 'github'|'slack'|'azure'|'azuredevops'|'dynatrace'|'servicenow'|'pagerduty'|'gitlab'|'eventChannel'|'mcpservernewrelic'|'mcpservergrafana'|'mcpserverdatadog'|'mcpserver'|'mcpserversplunk'|'azureidentity',
     *     name?: string|null,
     *     accessibleResources?: list<Document>|null,
     *     additionalServiceDetails?: AdditionalServiceDetails|null,
     *     kmsKeyArn?: string|null,
     *     privateConnectionName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
