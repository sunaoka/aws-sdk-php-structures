<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\GetIntegrations\Shapes;

use Sunaoka\Aws\Structures\Shape;

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
 * @property TlsConfig|null $TlsConfig
 */
class Integration extends Shape
{
    /**
     * @param array{
     *     ApiGatewayManaged?: bool|null,
     *     ConnectionId?: string|null,
     *     ConnectionType?: 'INTERNET'|'VPC_LINK'|null,
     *     ContentHandlingStrategy?: 'CONVERT_TO_BINARY'|'CONVERT_TO_TEXT'|null,
     *     CredentialsArn?: string|null,
     *     Description?: string|null,
     *     IntegrationId?: string|null,
     *     IntegrationMethod?: string|null,
     *     IntegrationResponseSelectionExpression?: string|null,
     *     IntegrationSubtype?: string|null,
     *     IntegrationType?: 'AWS'|'HTTP'|'MOCK'|'HTTP_PROXY'|'AWS_PROXY'|null,
     *     IntegrationUri?: string|null,
     *     PassthroughBehavior?: 'WHEN_NO_MATCH'|'NEVER'|'WHEN_NO_TEMPLATES'|null,
     *     PayloadFormatVersion?: string|null,
     *     RequestParameters?: array<string, string>|null,
     *     ResponseParameters?: array<string, array<string, string>>|null,
     *     RequestTemplates?: array<string, string>|null,
     *     TemplateSelectionExpression?: string|null,
     *     TimeoutInMillis?: int<50, 30000>|null,
     *     TlsConfig?: TlsConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
