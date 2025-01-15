<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\UpdateIntegration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property bool|null $ApiGatewayManaged
 * @property string|null $ConnectionId
 * @property 'INTERNET'|'VPC_LINK'|null $ConnectionType
 * @property 'CONVERT_TO_BINARY'|'CONVERT_TO_TEXT'|null $ContentHandlingStrategy
 * @property string|null $CredentialsArn
 * @property string|null $Description
 * @property string|null $IntegrationId
 * @property string|null $IntegrationMethod
 * @property string|null $IntegrationResponseSelectionExpression
 * @property string|null $IntegrationSubtype
 * @property 'AWS'|'HTTP'|'MOCK'|'HTTP_PROXY'|'AWS_PROXY'|null $IntegrationType
 * @property string|null $IntegrationUri
 * @property 'WHEN_NO_MATCH'|'NEVER'|'WHEN_NO_TEMPLATES'|null $PassthroughBehavior
 * @property string|null $PayloadFormatVersion
 * @property array<string, string>|null $RequestParameters
 * @property array<string, array<string, string>>|null $ResponseParameters
 * @property array<string, string>|null $RequestTemplates
 * @property string|null $TemplateSelectionExpression
 * @property int<50, 30000>|null $TimeoutInMillis
 * @property Shapes\TlsConfig|null $TlsConfig
 */
class UpdateIntegrationResponse extends Response
{
}
