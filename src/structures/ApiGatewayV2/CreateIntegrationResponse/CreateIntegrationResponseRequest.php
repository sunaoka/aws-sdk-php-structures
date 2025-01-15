<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\CreateIntegrationResponse;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApiId
 * @property 'CONVERT_TO_BINARY'|'CONVERT_TO_TEXT'|null $ContentHandlingStrategy
 * @property string $IntegrationId
 * @property string $IntegrationResponseKey
 * @property array<string, string>|null $ResponseParameters
 * @property array<string, string>|null $ResponseTemplates
 * @property string|null $TemplateSelectionExpression
 */
class CreateIntegrationResponseRequest extends Request
{
    /**
     * @param array{
     *     ApiId: string,
     *     ContentHandlingStrategy?: 'CONVERT_TO_BINARY'|'CONVERT_TO_TEXT'|null,
     *     IntegrationId: string,
     *     IntegrationResponseKey: string,
     *     ResponseParameters?: array<string, string>|null,
     *     ResponseTemplates?: array<string, string>|null,
     *     TemplateSelectionExpression?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
