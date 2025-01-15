<?php

namespace Sunaoka\Aws\Structures\ApiGateway\CreateRestApi;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string|null $description
 * @property string|null $version
 * @property string|null $cloneFrom
 * @property list<string>|null $binaryMediaTypes
 * @property int|null $minimumCompressionSize
 * @property 'HEADER'|'AUTHORIZER'|null $apiKeySource
 * @property Shapes\EndpointConfiguration|null $endpointConfiguration
 * @property string|null $policy
 * @property array<string, string>|null $tags
 * @property bool|null $disableExecuteApiEndpoint
 */
class CreateRestApiRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description?: string|null,
     *     version?: string|null,
     *     cloneFrom?: string|null,
     *     binaryMediaTypes?: list<string>|null,
     *     minimumCompressionSize?: int|null,
     *     apiKeySource?: 'HEADER'|'AUTHORIZER'|null,
     *     endpointConfiguration?: Shapes\EndpointConfiguration|null,
     *     policy?: string|null,
     *     tags?: array<string, string>|null,
     *     disableExecuteApiEndpoint?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
