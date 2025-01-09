<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\GetIntegrationResponses\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CONVERT_TO_BINARY'|'CONVERT_TO_TEXT' $ContentHandlingStrategy
 * @property string $IntegrationResponseId
 * @property string $IntegrationResponseKey
 * @property array<string, string> $ResponseParameters
 * @property array<string, string> $ResponseTemplates
 * @property string $TemplateSelectionExpression
 */
class IntegrationResponse extends Shape
{
    /**
     * @param array{
     *     ContentHandlingStrategy?: 'CONVERT_TO_BINARY'|'CONVERT_TO_TEXT',
     *     IntegrationResponseId?: string,
     *     IntegrationResponseKey: string,
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
