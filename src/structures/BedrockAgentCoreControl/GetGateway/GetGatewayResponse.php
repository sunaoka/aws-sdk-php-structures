<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetGateway;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $gatewayArn
 * @property string $gatewayId
 * @property string|null $gatewayUrl
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property 'CREATING'|'UPDATING'|'UPDATE_UNSUCCESSFUL'|'DELETING'|'READY'|'FAILED' $status
 * @property list<string>|null $statusReasons
 * @property string $name
 * @property string|null $description
 * @property string|null $roleArn
 * @property 'MCP'|null $protocolType
 * @property Shapes\GatewayProtocolConfiguration|null $protocolConfiguration
 * @property 'CUSTOM_JWT'|'AWS_IAM'|'NONE'|'AUTHENTICATE_ONLY' $authorizerType
 * @property Shapes\AuthorizerConfiguration|null $authorizerConfiguration
 * @property string|null $kmsKeyArn
 * @property Shapes\CustomTransformConfiguration|null $customTransformConfiguration
 * @property list<Shapes\GatewayInterceptorConfiguration>|null $interceptorConfigurations
 * @property Shapes\GatewayPolicyEngineConfiguration|null $policyEngineConfiguration
 * @property Shapes\WorkloadIdentityDetails|null $workloadIdentityDetails
 * @property 'DEBUG'|null $exceptionLevel
 * @property string|null $webAclArn
 * @property Shapes\WafConfiguration|null $wafConfiguration
 */
class GetGatewayResponse extends Response
{
}
