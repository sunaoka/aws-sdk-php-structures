<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetRestApis\Shapes;

use Sunaoka\Aws\Structures\Shape;

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
 * @property EndpointConfiguration|null $endpointConfiguration
 * @property string|null $policy
 * @property array<string, string>|null $tags
 * @property bool|null $disableExecuteApiEndpoint
 * @property string|null $rootResourceId
 */
class RestApi extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     name?: string|null,
     *     description?: string|null,
     *     createdDate?: \Aws\Api\DateTimeResult|null,
     *     version?: string|null,
     *     warnings?: list<string>|null,
     *     binaryMediaTypes?: list<string>|null,
     *     minimumCompressionSize?: int|null,
     *     apiKeySource?: 'HEADER'|'AUTHORIZER'|null,
     *     endpointConfiguration?: EndpointConfiguration|null,
     *     policy?: string|null,
     *     tags?: array<string, string>|null,
     *     disableExecuteApiEndpoint?: bool|null,
     *     rootResourceId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
