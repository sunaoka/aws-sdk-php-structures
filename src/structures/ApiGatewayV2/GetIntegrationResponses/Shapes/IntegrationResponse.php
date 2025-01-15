<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\GetIntegrationResponses\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CONVERT_TO_BINARY'|'CONVERT_TO_TEXT'|null $ContentHandlingStrategy
 * @property string|null $IntegrationResponseId
 * @property string $IntegrationResponseKey
 * @property array<string, string>|null $ResponseParameters
 * @property array<string, string>|null $ResponseTemplates
 * @property string|null $TemplateSelectionExpression
 */
class IntegrationResponse extends Shape
{
    /**
     * @param array{
     *     ContentHandlingStrategy?: 'CONVERT_TO_BINARY'|'CONVERT_TO_TEXT'|null,
     *     IntegrationResponseId?: string|null,
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
