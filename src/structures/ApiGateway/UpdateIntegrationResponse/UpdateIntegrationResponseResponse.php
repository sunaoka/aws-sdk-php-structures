<?php

namespace Sunaoka\Aws\Structures\ApiGateway\UpdateIntegrationResponse;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $statusCode
 * @property string $selectionPattern
 * @property array<string, string> $responseParameters
 * @property array<string, string> $responseTemplates
 * @property 'CONVERT_TO_BINARY'|'CONVERT_TO_TEXT' $contentHandling
 */
class UpdateIntegrationResponseResponse extends Response
{
}
