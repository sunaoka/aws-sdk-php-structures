<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetIntegrationResponse;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $statusCode
 * @property string|null $selectionPattern
 * @property array<string, string>|null $responseParameters
 * @property array<string, string>|null $responseTemplates
 * @property 'CONVERT_TO_BINARY'|'CONVERT_TO_TEXT'|null $contentHandling
 */
class GetIntegrationResponseResponse extends Response
{
}
