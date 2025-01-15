<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\UpdateIntegrationResponse;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'CONVERT_TO_BINARY'|'CONVERT_TO_TEXT'|null $ContentHandlingStrategy
 * @property string|null $IntegrationResponseId
 * @property string|null $IntegrationResponseKey
 * @property array<string, string>|null $ResponseParameters
 * @property array<string, string>|null $ResponseTemplates
 * @property string|null $TemplateSelectionExpression
 */
class UpdateIntegrationResponseResponse extends Response
{
}
