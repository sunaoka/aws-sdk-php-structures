<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\UpdateIntegrationResponse;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApiId
 * @property 'CONVERT_TO_BINARY'|'CONVERT_TO_TEXT' $ContentHandlingStrategy
 * @property string $IntegrationId
 * @property string $IntegrationResponseId
 * @property string $IntegrationResponseKey
 * @property array<string, string> $ResponseParameters
 * @property array<string, string> $ResponseTemplates
 * @property string $TemplateSelectionExpression
 */
class UpdateIntegrationResponseRequest extends Request
{
    /**
     * @param array{
     *     ApiId: string,
     *     ContentHandlingStrategy?: 'CONVERT_TO_BINARY'|'CONVERT_TO_TEXT',
     *     IntegrationId: string,
     *     IntegrationResponseId: string,
     *     IntegrationResponseKey?: string,
     *     ResponseParameters?: array<string, string>,
     *     ResponseTemplates?: array<string, string>,
     *     TemplateSelectionExpression?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
