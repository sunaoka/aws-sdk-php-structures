<?php

namespace Sunaoka\Aws\Structures\ApiGateway\CreateRestApi;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $description
 * @property string $version
 * @property string $cloneFrom
 * @property list<string> $binaryMediaTypes
 * @property int $minimumCompressionSize
 * @property 'HEADER'|'AUTHORIZER' $apiKeySource
 * @property Shapes\EndpointConfiguration $endpointConfiguration
 * @property string $policy
 * @property array<string, string> $tags
 * @property bool $disableExecuteApiEndpoint
 */
class CreateRestApiRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description?: string,
     *     version?: string,
     *     cloneFrom?: string,
     *     binaryMediaTypes?: list<string>,
     *     minimumCompressionSize?: int,
     *     apiKeySource?: 'HEADER'|'AUTHORIZER',
     *     endpointConfiguration?: Shapes\EndpointConfiguration,
     *     policy?: string,
     *     tags?: array<string, string>,
     *     disableExecuteApiEndpoint?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
