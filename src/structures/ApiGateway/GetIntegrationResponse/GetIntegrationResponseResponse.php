<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetIntegrationResponse;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $statusCode
 * @property string $selectionPattern
 * @property array<string, string> $responseParameters
 * @property array<string, string> $responseTemplates
 * @property 'CONVERT_TO_BINARY'|'CONVERT_TO_TEXT' $contentHandling
 */
class GetIntegrationResponseResponse extends Response
{
}
