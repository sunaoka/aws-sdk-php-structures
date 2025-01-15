<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\UpdateIntegrationResponse;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApiId
 * @property 'CONVERT_TO_BINARY'|'CONVERT_TO_TEXT'|null $ContentHandlingStrategy
 * @property string $IntegrationId
 * @property string $IntegrationResponseId
 * @property string|null $IntegrationResponseKey
 * @property array<string, string>|null $ResponseParameters
 * @property array<string, string>|null $ResponseTemplates
 * @property string|null $TemplateSelectionExpression
 */
class UpdateIntegrationResponseRequest extends Request
{
    /**
     * @param array{
     *     ApiId: string,
     *     ContentHandlingStrategy?: 'CONVERT_TO_BINARY'|'CONVERT_TO_TEXT'|null,
     *     IntegrationId: string,
     *     IntegrationResponseId: string,
     *     IntegrationResponseKey?: string|null,
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
