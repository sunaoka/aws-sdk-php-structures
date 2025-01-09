<?php

namespace Sunaoka\Aws\Structures\ApiGateway\CreateRestApi;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $id
 * @property string $name
 * @property string $description
 * @property \Aws\Api\DateTimeResult $createdDate
 * @property string $version
 * @property list<string> $warnings
 * @property list<string> $binaryMediaTypes
 * @property int $minimumCompressionSize
 * @property 'HEADER'|'AUTHORIZER' $apiKeySource
 * @property Shapes\EndpointConfiguration $endpointConfiguration
 * @property string $policy
 * @property array<string, string> $tags
 * @property bool $disableExecuteApiEndpoint
 * @property string $rootResourceId
 */
class CreateRestApiResponse extends Response
{
}
