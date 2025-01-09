<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\UpdateIntegration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property bool $ApiGatewayManaged
 * @property string $ConnectionId
 * @property 'INTERNET'|'VPC_LINK' $ConnectionType
 * @property 'CONVERT_TO_BINARY'|'CONVERT_TO_TEXT' $ContentHandlingStrategy
 * @property string $CredentialsArn
 * @property string $Description
 * @property string $IntegrationId
 * @property string $IntegrationMethod
 * @property string $IntegrationResponseSelectionExpression
 * @property string $IntegrationSubtype
 * @property 'AWS'|'HTTP'|'MOCK'|'HTTP_PROXY'|'AWS_PROXY' $IntegrationType
 * @property string $IntegrationUri
 * @property 'WHEN_NO_MATCH'|'NEVER'|'WHEN_NO_TEMPLATES' $PassthroughBehavior
 * @property string $PayloadFormatVersion
 * @property array<string, string> $RequestParameters
 * @property array<string, array<string, string>> $ResponseParameters
 * @property array<string, string> $RequestTemplates
 * @property string $TemplateSelectionExpression
 * @property int $TimeoutInMillis
 * @property Shapes\TlsConfig $TlsConfig
 */
class UpdateIntegrationResponse extends Response
{
}
