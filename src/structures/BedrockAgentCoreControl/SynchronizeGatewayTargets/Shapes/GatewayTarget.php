<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\SynchronizeGatewayTargets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $gatewayArn
 * @property string $targetId
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property 'CREATING'|'UPDATING'|'UPDATE_UNSUCCESSFUL'|'DELETING'|'READY'|'FAILED'|'SYNCHRONIZING'|'SYNCHRONIZE_UNSUCCESSFUL' $status
 * @property list<string>|null $statusReasons
 * @property string $name
 * @property string|null $description
 * @property TargetConfiguration $targetConfiguration
 * @property list<CredentialProviderConfiguration> $credentialProviderConfigurations
 * @property \Aws\Api\DateTimeResult|null $lastSynchronizedAt
 */
class GatewayTarget extends Shape
{
    /**
     * @param array{
     *     gatewayArn: string,
     *     targetId: string,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult,
     *     status: 'CREATING'|'UPDATING'|'UPDATE_UNSUCCESSFUL'|'DELETING'|'READY'|'FAILED'|'SYNCHRONIZING'|'SYNCHRONIZE_UNSUCCESSFUL',
     *     statusReasons?: list<string>|null,
     *     name: string,
     *     description?: string|null,
     *     targetConfiguration: TargetConfiguration,
     *     credentialProviderConfigurations: list<CredentialProviderConfiguration>,
     *     lastSynchronizedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
