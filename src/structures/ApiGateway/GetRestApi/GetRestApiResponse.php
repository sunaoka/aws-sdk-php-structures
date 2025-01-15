<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetRestApi;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $id
 * @property string|null $name
 * @property string|null $description
 * @property \Aws\Api\DateTimeResult|null $createdDate
 * @property string|null $version
 * @property list<string>|null $warnings
 * @property list<string>|null $binaryMediaTypes
 * @property int|null $minimumCompressionSize
 * @property 'HEADER'|'AUTHORIZER'|null $apiKeySource
 * @property Shapes\EndpointConfiguration|null $endpointConfiguration
 * @property string|null $policy
 * @property array<string, string>|null $tags
 * @property bool|null $disableExecuteApiEndpoint
 * @property string|null $rootResourceId
 */
class GetRestApiResponse extends Response
{
}
