<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\GetIntegrations\Shapes;

use Sunaoka\Aws\Structures\Shape;

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
 * @property int<50, 30000> $TimeoutInMillis
 * @property TlsConfig $TlsConfig
 */
class Integration extends Shape
{
    /**
     * @param array{
     *     ApiGatewayManaged?: bool,
     *     ConnectionId?: string,
     *     ConnectionType?: 'INTERNET'|'VPC_LINK',
     *     ContentHandlingStrategy?: 'CONVERT_TO_BINARY'|'CONVERT_TO_TEXT',
     *     CredentialsArn?: string,
     *     Description?: string,
     *     IntegrationId?: string,
     *     IntegrationMethod?: string,
     *     IntegrationResponseSelectionExpression?: string,
     *     IntegrationSubtype?: string,
     *     IntegrationType?: 'AWS'|'HTTP'|'MOCK'|'HTTP_PROXY'|'AWS_PROXY',
     *     IntegrationUri?: string,
     *     PassthroughBehavior?: 'WHEN_NO_MATCH'|'NEVER'|'WHEN_NO_TEMPLATES',
     *     PayloadFormatVersion?: string,
     *     RequestParameters?: array<string, string>,
     *     ResponseParameters?: array<string, array<string, string>>,
     *     RequestTemplates?: array<string, string>,
     *     TemplateSelectionExpression?: string,
     *     TimeoutInMillis?: int<50, 30000>,
     *     TlsConfig?: TlsConfig
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
