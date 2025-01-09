<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\CreateIntegrationResponse;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'CONVERT_TO_BINARY'|'CONVERT_TO_TEXT' $ContentHandlingStrategy
 * @property string $IntegrationResponseId
 * @property string $IntegrationResponseKey
 * @property array<string, string> $ResponseParameters
 * @property array<string, string> $ResponseTemplates
 * @property string $TemplateSelectionExpression
 */
class CreateIntegrationResponseResponse extends Response
{
}
