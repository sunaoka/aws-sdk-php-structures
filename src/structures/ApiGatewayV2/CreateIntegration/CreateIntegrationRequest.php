<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\CreateIntegration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApiId
 * @property string|null $ConnectionId
 * @property 'INTERNET'|'VPC_LINK'|null $ConnectionType
 * @property 'CONVERT_TO_BINARY'|'CONVERT_TO_TEXT'|null $ContentHandlingStrategy
 * @property string|null $CredentialsArn
 * @property string|null $Description
 * @property string|null $IntegrationMethod
 * @property string|null $IntegrationSubtype
 * @property 'AWS'|'HTTP'|'MOCK'|'HTTP_PROXY'|'AWS_PROXY' $IntegrationType
 * @property string|null $IntegrationUri
 * @property 'WHEN_NO_MATCH'|'NEVER'|'WHEN_NO_TEMPLATES'|null $PassthroughBehavior
 * @property string|null $PayloadFormatVersion
 * @property array<string, string>|null $RequestParameters
 * @property array<string, array<string, string>>|null $ResponseParameters
 * @property array<string, string>|null $RequestTemplates
 * @property string|null $TemplateSelectionExpression
 * @property int<50, 30000>|null $TimeoutInMillis
 * @property Shapes\TlsConfigInput|null $TlsConfig
 */
class CreateIntegrationRequest extends Request
{
    /**
     * @param array{
     *     ApiId: string,
     *     ConnectionId?: string|null,
     *     ConnectionType?: 'INTERNET'|'VPC_LINK'|null,
     *     ContentHandlingStrategy?: 'CONVERT_TO_BINARY'|'CONVERT_TO_TEXT'|null,
     *     CredentialsArn?: string|null,
     *     Description?: string|null,
     *     IntegrationMethod?: string|null,
     *     IntegrationSubtype?: string|null,
     *     IntegrationType: 'AWS'|'HTTP'|'MOCK'|'HTTP_PROXY'|'AWS_PROXY',
     *     IntegrationUri?: string|null,
     *     PassthroughBehavior?: 'WHEN_NO_MATCH'|'NEVER'|'WHEN_NO_TEMPLATES'|null,
     *     PayloadFormatVersion?: string|null,
     *     RequestParameters?: array<string, string>|null,
     *     ResponseParameters?: array<string, array<string, string>>|null,
     *     RequestTemplates?: array<string, string>|null,
     *     TemplateSelectionExpression?: string|null,
     *     TimeoutInMillis?: int<50, 30000>|null,
     *     TlsConfig?: Shapes\TlsConfigInput|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
