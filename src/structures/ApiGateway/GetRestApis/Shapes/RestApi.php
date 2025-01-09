<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetRestApis\Shapes;

use Sunaoka\Aws\Structures\Shape;

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
 * @property EndpointConfiguration $endpointConfiguration
 * @property string $policy
 * @property array<string, string> $tags
 * @property bool $disableExecuteApiEndpoint
 * @property string $rootResourceId
 */
class RestApi extends Shape
{
    /**
     * @param array{
     *     id?: string,
     *     name?: string,
     *     description?: string,
     *     createdDate?: \Aws\Api\DateTimeResult,
     *     version?: string,
     *     warnings?: list<string>,
     *     binaryMediaTypes?: list<string>,
     *     minimumCompressionSize?: int,
     *     apiKeySource?: 'HEADER'|'AUTHORIZER',
     *     endpointConfiguration?: EndpointConfiguration,
     *     policy?: string,
     *     tags?: array<string, string>,
     *     disableExecuteApiEndpoint?: bool,
     *     rootResourceId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
